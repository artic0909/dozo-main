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
        $maincategories = MainCategory::all(); // Fetch all main categories
        $products = Product::with('mainCategory', 'subCategory')->latest()->take(6)->get();
        $aboutNumbers = AdminAboutNumbersModel::all();
        $teams = AdminTeamModel::all();
        $testimonials = AdminTestimonialModel::all();
        $blogs = AdminBlogModel::latest()->take(3)->get();
        return view('frontend.pages.home', compact('aboutDetails', 'homeBannners', 'services', 'products', 'maincategories', 'aboutNumbers', 'teams', 'testimonials', 'blogs'));
    }

    public function getServiceDetails($id)
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        $service = AdminServiceDetailsModel::findOrFail($id);
        return view('frontend.pages.service-details', compact('service', 'maincategories', 'aboutDetails'));
    }

    public function getProductDetails($slugOrId)
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        
        $product = Product::with('mainCategory', 'subCategory')
            ->where('slug', $slugOrId)
            ->orWhere('id', $slugOrId)
            ->firstOrFail();

        $relatedProducts = Product::with('mainCategory', 'subCategory')
            ->where('main_cat', $product->main_cat)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('frontend.pages.product-view', compact('product', 'maincategories', 'aboutDetails', 'relatedProducts'));
    }

    public function getBlogDetails($slugOrId)
    {
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        
        $blog = AdminBlogModel::where('slug', $slugOrId)
            ->orWhere('id', $slugOrId)
            ->firstOrFail();

        $blogs = AdminBlogModel::where('id', '!=', $blog->id)->latest()->take(4)->get();
        $recentBlogs = $blogs;

        return view('frontend.pages.blog-details', compact('blogs', 'blog', 'recentBlogs', 'maincategories', 'aboutDetails'));
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
