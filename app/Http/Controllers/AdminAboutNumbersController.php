<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutNumbersModel;
use Illuminate\Http\Request;

class AdminAboutNumbersController extends Controller
{
    public function getAboutNumbers()
    {
        $numbers = AdminAboutNumbersModel::all();
        return view('admin.admin-about-numbers', compact('numbers'));
    }




    public function addAboutNumbers(Request $request)
    {
        $validated = $request->validate([
            'an_t' => 'string|nullable',
            'an_number' => 'string|nullable',
            'an_define' => 'string|nullable',
        ]);




        AdminAboutNumbersModel::create([
            'an_t' => $request->input('an_t'),
            'an_number' => $request->input('an_number'),
            'an_define' => $request->input('an_define'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editAboutNumbers(Request $request, $id)
    {
        $validated = $request->validate([
            'an_t' => 'string|nullable',
            'an_number' => 'string|nullable',
            'an_define' => 'string|nullable',
        ]);

        $aboutNumbersInfo = AdminAboutNumbersModel::find($id);

        if ($aboutNumbersInfo) {

            $aboutNumbersInfo->an_t = $request->input('an_t');
            $aboutNumbersInfo->an_number = $request->input('an_number');
            $aboutNumbersInfo->an_define = $request->input('an_define');
            $aboutNumbersInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteAboutNumbers($id)
    {
        $aboutNumbersInfo = AdminAboutNumbersModel::find($id);

        if ($aboutNumbersInfo) {

            $aboutNumbersInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
