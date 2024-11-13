<?php

namespace App\Http\Controllers;

use App\Models\ContactusModel;
use Illuminate\Http\Request;

class AdminContactusController extends Controller
{
    public function getsupport(){
        $supports = ContactusModel::orderBy('created_at', 'desc')->get();
        return view('admin.admin-customer-support', compact('supports'));
    }

    public function deletesupport(Request $request){
        ContactusModel::where('id', $request->id)->delete();
        return back();
    }
}
