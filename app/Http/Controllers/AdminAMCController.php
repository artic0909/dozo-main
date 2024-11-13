<?php

namespace App\Http\Controllers;

use App\Models\AMCReqModel;
use Illuminate\Http\Request;

class AdminAMCController extends Controller
{



    
    public function getAMC()
    {
        $amcs = AMCReqModel::all();
        return view('admin.admin-amc-requests', compact('amcs'));
    }







    public function pdf_create($id)
    {
        $amc = AMCReqModel::findOrFail($id);
        return view("admin.admin-amc-print", compact('amc'));
    }






    public function deleteRequest($id)
    {
        $amcReq = AMCReqModel::findOrFail($id);

        $amcReq->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
