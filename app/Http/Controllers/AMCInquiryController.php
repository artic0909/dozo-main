<?php

namespace App\Http\Controllers;

use App\Mail\AMCRequest;
use App\Models\AdminAboutCompanyModel;
use App\Models\AdminOfferModel;
use App\Models\AMCReqModel;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AMCInquiryController extends Controller
{
    // Return the view for AMC form
    public function amcView()
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        $offers = AdminOfferModel::all();

        return view('amc', compact('aboutDetails', 'maincategories', 'offers'));
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

        // Structure window_info as an array of associative arrays
        $windowInfo = [];
        foreach ($validatedData['window_name'] as $index => $name) {
            $windowInfo[] = [
                'window_name' => $name,
                'w_length' => $validatedData['w_length'][$index],
                'w_breadth' => $validatedData['w_breadth'][$index],
                'w_type' => $validatedData['w_type'][$index],
                'w_unit' => $validatedData['w_unit'][$index],
            ];
        }

        // Create the new AMC request
        $amcRequest = new AMCReqModel;
        $amcRequest->fname = $validatedData['fname'];
        $amcRequest->email = $validatedData['email'];
        $amcRequest->mob = $validatedData['mob'];
        $amcRequest->add = $validatedData['add'];
        $amcRequest->pin = $validatedData['pin'];
        $amcRequest->window_info = $windowInfo; // Stored as JSON due to 'array' cast in model
        $amcRequest->d_op = $validatedData['d_op'];
        $amcRequest->save();

        // Send email confirmation
        $to = $validatedData['email'];
        $msg = "Thanks for your AMC Inquiry with DOZO | House of Windows. We will process your inquiry soon!";
        $subject = "Annual Maintenance Contract";
        Mail::to($to)->send(new AMCRequest($msg, $subject));

        return response()->json(['success' => true, 'message' => 'Your request has been submitted successfully!']);
    }
}
