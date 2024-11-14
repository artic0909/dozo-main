<?php

namespace App\Http\Controllers;

use App\Models\AdminBlogModel;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function getblog()
    {
        $blogs = AdminBlogModel::all();
        return view('admin.admin-blogs', compact('blogs'));
    }




    public function addblog(Request $request)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'b_title' => 'string|nullable',
            'b_qt' => 'string|nullable',
            'b_desc' => 'string|nullable',
            'b_tag' => 'string|nullable',
            'b_date' => 'string|nullable',
        ]);

        if ($request->hasFile('b_img')) {
            $file = $request->file('b_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
        }


        AdminBlogModel::create([
            'b_img' => $filePath ?? null,
            'b_title' => $request->input('b_title'),
            'b_qt' => $request->input('b_qt'),
            'b_desc' => $request->input('b_desc'),
            'b_tag' => $request->input('b_tag'),
            'b_date' => $request->input('b_date'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    public function editblog(Request $request, $id)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'b_title' => 'string|nullable',
            'b_qt' => 'string|nullable',
            'b_desc' => 'string|nullable',
            'b_tag' => 'string|nullable',
            'b_date' => 'string|nullable',
        ]);

        $blogInfo = AdminBlogModel::find($id);

        if ($blogInfo) {
            if ($request->hasFile('b_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $blogInfo->b_img))) {
                    unlink(public_path('storage/' . $blogInfo->b_img));
                }

                // Store the new image
                $file = $request->file('b_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
                $blogInfo->b_img = $filePath;
            }

            $blogInfo->b_title = $request->input('b_title');
            $blogInfo->b_qt = $request->input('b_qt');
            $blogInfo->b_desc = $request->input('b_desc');
            $blogInfo->b_tag = $request->input('b_tag');
            $blogInfo->b_date = $request->input('b_date');
            $blogInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    public function deleteblog($id)
    {
        $blogInfo = AdminBlogModel::find($id);

        if ($blogInfo) {

            if (file_exists(public_path('storage/' . $blogInfo->b_img))) {
                unlink(public_path('storage/' . $blogInfo->b_img));
            }


            $blogInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
