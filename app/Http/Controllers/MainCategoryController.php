<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function getMainC()
    {
        $maincategories = MainCategory::all();
        return view('admin.admin-main-category', compact('maincategories'));
    }




    public function addMainC(Request $request)
    {
        $validated = $request->validate([
            'main_category' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $baseSlug = !empty($request->input('slug')) 
            ? \Illuminate\Support\Str::slug($request->input('slug')) 
            : \Illuminate\Support\Str::slug($request->input('main_category'));

        $slug = $baseSlug ?: 'category-' . time();
        $count = 1;
        while (MainCategory::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        MainCategory::create([
            'main_category' => $request->input('main_category'),
            'slug' => $slug,
        ]);

        return back()->with('success', 'Category added successfully!');
    }




    public function editMainC(Request $request, $id)
    {
        $validated = $request->validate([
            'main_category' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $mainCategoryInfo = MainCategory::find($id);

        if ($mainCategoryInfo) {
            $baseSlug = !empty($request->input('slug')) 
                ? \Illuminate\Support\Str::slug($request->input('slug')) 
                : \Illuminate\Support\Str::slug($request->input('main_category'));

            $slug = $baseSlug ?: 'category-' . $id;
            $count = 1;
            while (MainCategory::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $baseSlug . '-' . $count;
                $count++;
            }

            $mainCategoryInfo->main_category = $request->input('main_category');
            $mainCategoryInfo->slug = $slug;
            $mainCategoryInfo->save();

            return back()->with('success', 'Category updated successfully!');
        } else {
            return back()->with('error', 'Category not found.');
        }
    }






    public function deleteMainC($id)
    {
        $mainCategoryInfo = MainCategory::find($id);

        if ($mainCategoryInfo) {

            $mainCategoryInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
