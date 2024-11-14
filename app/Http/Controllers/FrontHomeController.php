<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use App\Models\AdminHomeBannerModel;
use App\Models\AdminServiceDetailsModel;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function getall()
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $homeBannners = AdminHomeBannerModel::all();
        $services = AdminServiceDetailsModel::inRandomOrder()->take(6)->get();
        $mainCategories = MainCategory::all(); // Fetch all main categories
        $products = Product::with('mainCategory', 'subCategory')->inRandomOrder()->take(3)->get();
        return view('home', compact('aboutDetails', 'homeBannners', 'services', 'products', 'mainCategories'));
    }

    public function getServiceDetails($id)
    {
        $service = AdminServiceDetailsModel::findOrFail($id);
        return view('service-details', compact('service'));
    }

    public function getProductDetails($id)
    {
        $product = Product::with('mainCategory', 'subCategory')->findOrFail($id);
        return view('product-view', compact('product'));
    }
}
