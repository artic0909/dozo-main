<?php

namespace App\Http\Controllers;

use App\Models\InquryWindowModel;
use Illuminate\Http\Request;

class AdminInquiryWindowController extends Controller
{
    public function getInquiry()
    {
        $inquiries = InquryWindowModel::all();
        return view('admin.admin-window-inquiry', compact('inquiries'));
    }







    public function download_inquiry($id)
    {
        $inquiry = InquryWindowModel::findOrFail($id);
        return view("admin.admin-inquiry-print", compact('inquiry'));
    }






    public function deleteInquiry($id)
    {
        $amcReq = InquryWindowModel::findOrFail($id);

        $amcReq->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
