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
            'main_category' => 'string|nullable',
        ]);




        MainCategory::create([
            'main_category' => $request->input('main_category'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editMainC(Request $request, $id)
    {
        $validated = $request->validate([
            'main_category' => 'string|nullable',
        ]);

        $mainCategoryInfo = MainCategory::find($id);

        if ($mainCategoryInfo) {

            $mainCategoryInfo->main_category = $request->input('main_category');
            $mainCategoryInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
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
