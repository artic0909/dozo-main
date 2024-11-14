<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use App\Models\AdminServiceDetailsModel;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class FrontServiceController extends Controller
{
    public function getAllService()
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        $services = AdminServiceDetailsModel::all();

        return view('service', compact('aboutDetails', 'maincategories', 'services'));
    }

    public function getProduct($id)
    {

        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();


        $maincategory = MainCategory::with('products')->findOrFail($id);
        $products = $maincategory->products;

        return view('product', compact('aboutDetails', 'maincategories', 'maincategory', 'products'));
    }
}
