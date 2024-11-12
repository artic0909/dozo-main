<?php

namespace App\Http\Controllers;

use App\Models\AdminServiceDetailsModel;
use Illuminate\Http\Request;

class AdminServiceDetailsController extends Controller
{
    public function getService()
    {
        $services = AdminServiceDetailsModel::all();
        return view('admin.admin-service-details', compact('services'));
    }




    public function addService(Request $request)
    {
        $validated = $request->validate([
            'sr_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sr_title' => 'string|nullable',
            'sr_desc' => 'string|nullable',
        ]);

        if ($request->hasFile('sr_img')) {
            $file = $request->file('sr_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/service', $fileName, 'public');
        }


        AdminServiceDetailsModel::create([
            'sr_img' => $filePath ?? null,
            'sr_title' => $request->input('sr_title'),
            'sr_desc' => $request->input('sr_desc'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editService(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'sr_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sr_title' => 'string|nullable',
            'sr_desc' => 'string|nullable',
        ]);

        // Find the service record by ID
        $serviceInfo = AdminServiceDetailsModel::find($id);

        if ($serviceInfo) {
            // If a new image is uploaded, handle image replacement
            if ($request->hasFile('sr_img')) {
                // Delete the old image if it exists
                if ($serviceInfo->sr_img && file_exists(public_path('storage/' . $serviceInfo->sr_img))) {
                    unlink(public_path('storage/' . $serviceInfo->sr_img));
                }

                // Store the new image
                $file = $request->file('sr_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/service', $fileName, 'public');
                $serviceInfo->sr_img = $filePath;
            }

            // Update title and description
            $serviceInfo->sr_title = $request->input('sr_title');
            $serviceInfo->sr_desc = $request->input('sr_desc');

            // Save changes to the database
            $serviceInfo->save();

            return back()->with('success', 'Updated successfully!');
        } else {
            return back()->with('error', 'Service not found.');
        }
    }







    public function deleteService($id)
    {
        $serviceInfo = AdminServiceDetailsModel::find($id);

        if ($serviceInfo) {

            if (file_exists(public_path('storage/' . $serviceInfo->sr_img))) {
                unlink(public_path('storage/' . $serviceInfo->sr_img));
            }


            $serviceInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
