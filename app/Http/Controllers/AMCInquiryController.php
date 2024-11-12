<?php

namespace App\Http\Controllers;

use App\Mail\AmcFormSubmitted;
use App\Models\AMCReqModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AMCInquiryController extends Controller
{
    // Return the view for AMC form
    public function amcView()
    {
        return view('amc');
    }

    // Store the AMC inquiry
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mob' => 'required|string|max:15',
            'add' => 'required|string',
            'pin' => 'nullable|string|max:10',
            'window_name' => 'required|array',
            'window_name.*' => 'required|string|max:255',
            'w_length' => 'required|array',
            'w_length.*' => 'required|string|max:255',
            'w_breadth' => 'required|array',
            'w_breadth.*' => 'required|string|max:255',
            'w_type' => 'required|array',
            'w_type.*' => 'required|string|max:255',
            'w_unit' => 'required|array',
            'w_unit.*' => 'required|integer',
            'd_op' => 'required|string',
        ]);

        // Create the new AMC request
        $amcRequest = new AMCReqModel;
        $amcRequest->fname = $validatedData['fname'];
        $amcRequest->email = $validatedData['email'];
        $amcRequest->mob = $validatedData['mob'];
        $amcRequest->add = $validatedData['add'];
        $amcRequest->pin = $validatedData['pin'];
        $amcRequest->window_info = json_encode([
            'names' => $validatedData['window_name'],
            'lengths' => $validatedData['w_length'],
            'breadths' => $validatedData['w_breadth'],
            'types' => $validatedData['w_type'],
            'units' => $validatedData['w_unit'],
        ]);
        $amcRequest->d_op = $validatedData['d_op'];
        $amcRequest->save();

        return response()->json(['success' => true, 'message' => 'Your request has been submitted successfully!']);
    }
}
