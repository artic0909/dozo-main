<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{



    public function getSubC()
    {
        // Get all subcategories with their associated main categories
        $subcategories = SubCategory::with('mainCategory')->get();
        $mainCategories = MainCategory::all();

        return view('admin.admin-sub-category', compact('subcategories', 'mainCategories'));
    }




    public function addSubC(Request $request)
    {
        $validated = $request->validate([
            'main_category_id' => 'required|exists:main_categories,id',
            'sub_category' => 'required|string|max:255',
        ]);

        SubCategory::create([
            'main_category_id' => $request->input('main_category_id'),
            'sub_category' => $request->input('sub_category'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }





    public function editSubC(Request $request, $id)
    {
        $validated = $request->validate([
            'main_category_id' => 'required|exists:main_categories,id',
            'sub_category' => 'required|string|max:255',
        ]);

        $subCategory = SubCategory::find($id);

        if ($subCategory) {
            $subCategory->main_category_id = $request->input('main_category_id');
            $subCategory->sub_category = $request->input('sub_category');
            $subCategory->save();

            return back()->with('success', 'Updated Successfully!');
        } else {
            return back()->with('error', 'Subcategory not found.');
        }
    }





    public function deleteSubC($id)
    {
        $subCategory = SubCategory::find($id);

        if ($subCategory) {
            $subCategory->delete();

            return back()->with('success', 'Deleted Successfully!');
        } else {
            return back()->with('error', 'Subcategory not found.');
        }
    }
}
