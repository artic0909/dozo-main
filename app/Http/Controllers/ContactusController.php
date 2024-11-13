<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function support(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'email' => 'string|nullable',
            'subject' => 'string|nullable',
            'inquiry' => 'string|nullable',
        ]);

        try {
            // Create the new record
            ContactusModel::create([
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'inquiry' => $request->input('inquiry'),
            ]);

            // Send the email
            $to = $validated['email'];
            $msg = "Thanks For Contacting Us. We Will Get Back To You & fix Your Issues Soon.";
            Mail::to($to)->send(new ContactUsMail(
                $request->input('email'),
                $request->input('subject'),
                $request->input('inquiry'),
                $msg
            ));

            // Return a JSON response indicating success
            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            // Return a JSON response indicating failure
            return response()->json(['success' => false, 'message' => 'An error occurred, please try again.']);
        }
    }
}
