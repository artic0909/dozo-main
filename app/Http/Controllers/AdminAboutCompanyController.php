<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use Illuminate\Http\Request;

class AdminAboutCompanyController extends Controller
{
    public function getAboutCompany()
    {
        $aboutcompanies = AdminAboutCompanyModel::all();
        return view('admin.admin-about-company', compact('aboutcompanies'));
    }




    public function addAboutCompany(Request $request)
    {
        $validated = $request->validate([
            'ab_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ab_b_desc' => 'string|nullable',
            'ab_desc' => 'string|nullable',
            'ab_year' => 'string|nullable',
            'ab_email' => 'string|nullable',
            'ab_num' => 'string|nullable',
        ]);

        if ($request->hasFile('ab_img')) {
            $file = $request->file('ab_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/aboutcompany', $fileName, 'public');
        }


        AdminAboutCompanyModel::create([
            'ab_img' => $filePath ?? null,
            'ab_b_desc' => $request->input('ab_b_desc'),
            'ab_desc' => $request->input('ab_desc'),
            'ab_year' => $request->input('ab_year'),
            'ab_email' => $request->input('ab_email'),
            'ab_num' => $request->input('ab_num'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editAboutCompany(Request $request, $id)
    {
        $validated = $request->validate([
            'ab_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ab_b_desc' => 'string|nullable',
            'ab_desc' => 'string|nullable',
            'ab_year' => 'string|nullable',
            'ab_email' => 'string|nullable',
            'ab_num' => 'string|nullable',
        ]);

        $aboutCompanyInfo = AdminAboutCompanyModel::find($id);

        if ($aboutCompanyInfo) {
            if ($request->hasFile('ab_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $aboutCompanyInfo->ab_img))) {
                    unlink(public_path('storage/' . $aboutCompanyInfo->ab_img));
                }

                // Store the new image
                $file = $request->file('ab_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/aboutcompany', $fileName, 'public');
                $aboutCompanyInfo->ab_img = $filePath;
            }

            $aboutCompanyInfo->ab_b_desc = $request->input('ab_b_desc');
            $aboutCompanyInfo->ab_desc = $request->input('ab_desc');
            $aboutCompanyInfo->ab_year = $request->input('ab_year');
            $aboutCompanyInfo->ab_email = $request->input('ab_email');
            $aboutCompanyInfo->ab_num = $request->input('ab_num');
            $aboutCompanyInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteAboutCompany($id)
    {
        $aboutCompanyInfo = AdminAboutCompanyModel::find($id);

        if ($aboutCompanyInfo) {

            if (file_exists(public_path('storage/' . $aboutCompanyInfo->ab_img))) {
                unlink(public_path('storage/' . $aboutCompanyInfo->ab_img));
            }


            $aboutCompanyInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
