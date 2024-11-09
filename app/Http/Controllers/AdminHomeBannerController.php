<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeBannerModel;
use Illuminate\Http\Request;

class AdminHomeBannerController extends Controller
{
    public function getHomeBanner()
    {
        $homebanners = AdminHomeBannerModel::all();
        return view('admin.admin-home-banner', compact('homebanners'));
    }




    public function addHomeBanner(Request $request)
    {
        $validated = $request->validate([
            'home_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'h_s_desc' => 'string|nullable',
            'h_title' => 'string|nullable',
            'h_a_title' => 'string|nullable',
            'h_p_name' => 'string|nullable',
            'h_p_url' => 'string|nullable',
        ]);

        if ($request->hasFile('home_banner')) {
            $file = $request->file('home_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
        }


        AdminHomeBannerModel::create([
            'home_banner' => $filePath ?? null,
            'h_s_desc' => $request->input('h_s_desc'),
            'h_title' => $request->input('h_title'),
            'h_a_title' => $request->input('h_a_title'),
            'h_p_name' => $request->input('h_p_name'),
            'h_p_url' => $request->input('h_p_url'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editHomeBanner(Request $request, $id)
    {
        $validated = $request->validate([
            'home_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'h_s_desc' => 'string|nullable',
            'h_title' => 'string|nullable',
            'h_a_title' => 'string|nullable',
            'h_p_name' => 'string|nullable',
            'h_p_url' => 'string|nullable',
        ]);

        $homeBannerInfo = AdminHomeBannerModel::find($id);

        if ($homeBannerInfo) {
            if ($request->hasFile('home_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $homeBannerInfo->home_banner))) {
                    unlink(public_path('storage/' . $homeBannerInfo->home_banner));
                }

                // Store the new image
                $file = $request->file('home_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/homebanner', $fileName, 'public');
                $homeBannerInfo->home_banner = $filePath;
            }

            $homeBannerInfo->h_s_desc = $request->input('h_s_desc');
            $homeBannerInfo->h_title = $request->input('h_title');
            $homeBannerInfo->h_a_title = $request->input('h_a_title');
            $homeBannerInfo->h_p_name = $request->input('h_p_name');
            $homeBannerInfo->h_p_url = $request->input('h_p_url');
            $homeBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteHomeBanner($id)
    {
        $homeBannerInfo = AdminHomeBannerModel::find($id);

        if ($homeBannerInfo) {

            if (file_exists(public_path('storage/' . $homeBannerInfo->home_banner))) {
                unlink(public_path('storage/' . $homeBannerInfo->home_banner));
            }


            $homeBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
