<?php

namespace App\Http\Controllers;

use App\Models\AdminTeamModel;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function gett()
    {
        $teams = AdminTeamModel::all();
        return view('admin.admin-teams', compact('teams'));
    }




    public function addt(Request $request)
    {
        $validated = $request->validate([
            'm_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'm_name' => 'string|nullable',
            'm_prof' => 'string|nullable',
        ]);

        if ($request->hasFile('m_img')) {
            $file = $request->file('m_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/members', $fileName, 'public');
        }


        AdminTeamModel::create([
            'm_img' => $filePath ?? null,
            'm_name' => $request->input('m_name'),
            'm_prof' => $request->input('m_prof'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    public function editt(Request $request, $id)
    {
        $validated = $request->validate([
            'm_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'm_name' => 'string|nullable',
            'm_prof' => 'string|nullable',
        ]);

        $teamInfo = AdminTeamModel::find($id);

        if ($teamInfo) {
            if ($request->hasFile('m_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $teamInfo->m_img))) {
                    unlink(public_path('storage/' . $teamInfo->m_img));
                }

                // Store the new image
                $file = $request->file('m_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/members', $fileName, 'public');
                $teamInfo->m_img = $filePath;
            }

            $teamInfo->m_name = $request->input('m_name');
            $teamInfo->m_prof = $request->input('m_prof');
            $teamInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    public function deletet($id)
    {
        $teamInfo = AdminTeamModel::find($id);

        if ($teamInfo) {

            if (file_exists(public_path('storage/' . $teamInfo->m_img))) {
                unlink(public_path('storage/' . $teamInfo->m_img));
            }


            $teamInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
