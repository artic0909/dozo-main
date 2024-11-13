<?php

namespace App\Http\Controllers;

use App\Models\InquryWindowModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryWindowMail;
use Illuminate\Http\Request;

class InquiryWindowController extends Controller
{

    public function inquiryView()
    {
        return view('inquiry');
    }

    // Store the AMC inquiry
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'cus_name' => 'required|string|max:255',
            'cus_email' => 'required|email|max:255',
            'cus_mob' => 'required|string|max:15',
            'cus_add' => 'required|string',
            'cus_pin' => 'nullable|string|max:10',
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
            'cus_d_op' => 'required|string',
        ]);

        // Structure window_info as an array of associative arrays
        $cus_window_info = [];
        foreach ($validatedData['window_name'] as $index => $name) {
            $cus_window_info[] = [
                'window_name' => $name,
                'w_length' => $validatedData['w_length'][$index],
                'w_breadth' => $validatedData['w_breadth'][$index],
                'w_type' => $validatedData['w_type'][$index],
                'w_unit' => $validatedData['w_unit'][$index],
            ];
        }

        // Create the new AMC request
        $inquryWindow = new InquryWindowModel;
        $inquryWindow->cus_name = $validatedData['cus_name'];
        $inquryWindow->cus_email = $validatedData['cus_email'];
        $inquryWindow->cus_mob = $validatedData['cus_mob'];
        $inquryWindow->cus_add = $validatedData['cus_add'];
        $inquryWindow->cus_pin = $validatedData['cus_pin'];
        $inquryWindow->cus_window_info = $cus_window_info; // Stored as JSON due to 'array' cast in model
        $inquryWindow->cus_d_op = $validatedData['cus_d_op'];
        $inquryWindow->save();

        // Send email confirmation
        $to = $validatedData['cus_email'];
        $msg = "Thanks for Window Inquiry with DOZO | House of Windows. We will process your inquiry soon!";
        $subject = "Window Inquiry Confirmation";
        Mail::to($to)->send(new InquiryWindowMail($msg, $subject));

        return response()->json(['success' => true, 'message' => 'Your request has been submitted successfully!']);
    }
}
