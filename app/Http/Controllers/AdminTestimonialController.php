<?php

namespace App\Http\Controllers;

use App\Models\AdminTestimonialModel;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function get()
    {
        $testimonials = AdminTestimonialModel::all();
        return view('admin.admin-testimonials', compact('testimonials'));
    }




    public function add(Request $request)
    {
        $validated = $request->validate([
            't_name' => 'string|nullable',
            't_prof' => 'string|nullable',
            't_feedback' => 'string|nullable',
        ]);


        AdminTestimonialModel::create([
            't_name' => $request->input('t_name'),
            't_prof' => $request->input('t_prof'),
            't_feedback' => $request->input('t_feedback'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }



    public function edit(Request $request, $id)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            't_name' => 'string|nullable',
            't_prof' => 'string|nullable',
            't_feedback' => 'string|nullable',
        ]);

        $testInfo = AdminTestimonialModel::find($id);

        if ($testInfo) {
           

            $testInfo->t_name = $request->input('t_name');
            $testInfo->t_prof = $request->input('t_prof');
            $testInfo->t_feedback = $request->input('t_feedback');
            $testInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    public function delete($id)
    {
        $testInfo = AdminTestimonialModel::find($id);

        if ($testInfo) {

            $testInfo->delete();
            
            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
