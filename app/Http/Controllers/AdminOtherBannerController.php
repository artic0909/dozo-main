<?php

namespace App\Http\Controllers;

use App\Models\AdminOtherBannerModel;
use Illuminate\Http\Request;

class AdminOtherBannerController extends Controller
{
    public function getOtherBanner()
    {
        $otherbanners = AdminOtherBannerModel::all();
        return view('admin.admin-other-banner', compact('otherbanners'));
    }




    public function addOtherBanner(Request $request)
    {
        $validated = $request->validate([
            'other_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('other_banner')) {
            $file = $request->file('other_banner');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/otherbanner', $fileName, 'public');
        }


        AdminOtherBannerModel::create([
            'other_banner' => $filePath ?? null,
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editOtherBanner(Request $request, $id)
    {
        $validated = $request->validate([
            'other_banner' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $otherBannerInfo = AdminOtherBannerModel::find($id);

        if ($otherBannerInfo) {
            if ($request->hasFile('other_banner')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $otherBannerInfo->other_banner))) {
                    unlink(public_path('storage/' . $otherBannerInfo->other_banner));
                }

                // Store the new image
                $file = $request->file('other_banner');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/otherbanner', $fileName, 'public');
                $otherBannerInfo->other_banner = $filePath;
            }

            $otherBannerInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteOtherBanner($id)
    {
        $otherBannerInfo = AdminOtherBannerModel::find($id);

        if ($otherBannerInfo) {

            if (file_exists(public_path('storage/' . $otherBannerInfo->other_banner))) {
                unlink(public_path('storage/' . $otherBannerInfo->other_banner));
            }


            $otherBannerInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
