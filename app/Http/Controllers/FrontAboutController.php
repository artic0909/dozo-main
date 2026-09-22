<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use App\Models\AdminTeamModel;
use App\Models\AdminTestimonialModel;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function getAllAbout()
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $testimonials = AdminTestimonialModel::all();
        $teams = AdminTeamModel::all();
        $maincategories = MainCategory::all();
        return view('frontend.pages.about', compact('aboutDetails', 'testimonials', 'teams', 'maincategories'));
    }

    public function getProduct($id)
    {

        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();


        $maincategory = MainCategory::with('products')->findOrFail($id);
        $products = $maincategory->products;

        return view('frontend.pages.product', compact('aboutDetails', 'maincategories', 'maincategory', 'products'));
    }
}
