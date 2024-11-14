<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use App\Models\AdminAboutNumbersModel;
use App\Models\AdminBlogModel;
use App\Models\AdminHomeBannerModel;
use App\Models\AdminServiceDetailsModel;
use App\Models\AdminTeamModel;
use App\Models\AdminTestimonialModel;
use App\Models\MainCategory;
use App\Models\Product;
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
        $aboutNumbers = AdminAboutNumbersModel::all();
        $teams = AdminTeamModel::all();
        $testimonials = AdminTestimonialModel::all();
        $blogs = AdminBlogModel::inRandomOrder()->take(2)->get();
        return view('home', compact('aboutDetails', 'homeBannners', 'services', 'products', 'mainCategories', 'aboutNumbers', 'teams', 'testimonials', 'blogs'));
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

    public function getBlogDetails($id)
    {
        $blogs = AdminBlogModel::inRandomOrder()->take(4)->get();
        $blog = AdminBlogModel::findOrFail($id);
        return view('blog-details', compact('blogs', 'blog'));
    }


    public function addBlog(Request $request)
    {
        $validated = $request->validate([
            'b_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'b_title' => 'string|nullable',
            'b_qt' => 'string|nullable',
            'b_desc' => 'string|nullable',
            'b_tag' => 'string|nullable',
            'b_date' => 'string|nullable',
        ]);

        if ($request->hasFile('b_img')) {
            $file = $request->file('b_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/blogs', $fileName, 'public');
        }


        AdminBlogModel::create([
            'b_img' => $filePath ?? null,
            'b_title' => $request->input('b_title'),
            'b_qt' => $request->input('b_qt'),
            'b_desc' => $request->input('b_desc'),
            'b_tag' => $request->input('b_tag'),
            'b_date' => $request->input('b_date'),
        ]);

        return back()->with('success', 'Added Successfully!');
    }
}
