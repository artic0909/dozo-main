<?php

namespace App\Http\Controllers;

use App\Models\AdminOfferModel;
use Illuminate\Http\Request;

class AdminOfferController extends Controller
{
    public function getoffer()
    {
        $offers = AdminOfferModel::all();
        return view('admin.admin-amc-offer', compact('offers'));
    }




    public function addoffer(Request $request)
    {
        $validated = $request->validate([
            'offer' => 'string|nullable',
        ]);




        AdminOfferModel::create([
            'offer' => $request->input('offer'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }




    public function editoffer(Request $request, $id)
    {
        $validated = $request->validate([
            'offer' => 'string|nullable',
        ]);

        $AdminOfferModelInfo = AdminOfferModel::find($id);

        if ($AdminOfferModelInfo) {

            $AdminOfferModelInfo->offer = $request->input('offer');
            $AdminOfferModelInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }






    public function deleteoffer($id)
    {
        $AdminOfferModelInfo = AdminOfferModel::find($id);

        if ($AdminOfferModelInfo) {

            $AdminOfferModelInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
