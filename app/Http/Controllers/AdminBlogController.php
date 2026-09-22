<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function getblog()
    {
        $blogs = AdminBlogModel::latest()->get();
        return view('admin.admin-blogs', compact('blogs'));
    }

    public function addblog(Request $request)
    {
        $validated = $request->validate([
            'b_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'b_title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:admin_blog_models,slug',
            'b_qt' => 'nullable|string',
            'b_desc' => 'required|string',
            'b_tag' => 'nullable|string|max:255',
            'b_date' => 'nullable|string',
        ]);

        $filePath = null;
        if ($request->hasFile('b_img')) {
            $file = $request->file('b_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
        }

        $slug = !empty($request->input('slug')) 
            ? Str::slug($request->input('slug')) 
            : AdminBlogModel::generateUniqueSlug($request->input('b_title'));

        AdminBlogModel::create([
            'b_img' => $filePath,
            'b_title' => $request->input('b_title'),
            'slug' => $slug,
            'b_qt' => $request->input('b_qt'),
            'b_desc' => $request->input('b_desc'),
            'b_tag' => $request->input('b_tag'),
            'b_date' => $request->input('b_date') ?: date('Y-m-d'),
        ]);

        return back()->with('success', 'Blog added successfully!');
    }

    public function editblog(Request $request, $id)
    {
        $blogInfo = AdminBlogModel::findOrFail($id);

        $validated = $request->validate([
            'b_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
            'b_title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:admin_blog_models,slug,' . $blogInfo->id,
            'b_qt' => 'nullable|string',
            'b_desc' => 'required|string',
            'b_tag' => 'nullable|string|max:255',
            'b_date' => 'nullable|string',
        ]);

        if ($request->hasFile('b_img')) {
            if ($blogInfo->b_img && file_exists(public_path('storage/' . $blogInfo->b_img))) {
                unlink(public_path('storage/' . $blogInfo->b_img));
            }

            $file = $request->file('b_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
            $blogInfo->b_img = $filePath;
        }

        if (!empty($request->input('slug'))) {
            $blogInfo->slug = Str::slug($request->input('slug'));
        } elseif ($blogInfo->isDirty('b_title')) {
            $blogInfo->slug = AdminBlogModel::generateUniqueSlug($request->input('b_title'), $blogInfo->id);
        }

        $blogInfo->b_title = $request->input('b_title');
        $blogInfo->b_qt = $request->input('b_qt');
        $blogInfo->b_desc = $request->input('b_desc');
        $blogInfo->b_tag = $request->input('b_tag');
        $blogInfo->b_date = $request->input('b_date');
        $blogInfo->save();

        return back()->with('success', 'Blog updated successfully!');
    }

    public function deleteblog($id)
    {
        $blogInfo = AdminBlogModel::findOrFail($id);

        if ($blogInfo->b_img && file_exists(public_path('storage/' . $blogInfo->b_img))) {
            unlink(public_path('storage/' . $blogInfo->b_img));
        }

        $blogInfo->delete();

        return back()->with('success', 'Blog deleted successfully!');
    }
}
