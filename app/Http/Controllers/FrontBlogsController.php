<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutCompanyModel;
use App\Models\AdminBlogModel;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class FrontBlogsController extends Controller
{
    public function getAllBlog(){
        $aboutDetails = AdminAboutCompanyModel::all();
        $maincategories = MainCategory::all();
        $blogs = AdminBlogModel::paginate(2); //pagination
        $blogData = AdminBlogModel::inRandomOrder()->take(4)->get();

        return view('blog', compact('aboutDetails', 'maincategories', 'blogs', 'blogData'));
    }
}
