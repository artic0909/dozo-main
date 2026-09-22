<?php

namespace App\Http\Controllers;

use App\Models\AMCReqModel;
use App\Models\AdminBlogModel;
use App\Models\AdminServiceDetailsModel;
use App\Models\ContactusModel;
use App\Models\InquryWindowModel;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Core metrics
        $totalInquiries = InquryWindowModel::count();
        $totalAMC = AMCReqModel::count();
        $totalSupport = ContactusModel::count();
        $totalProducts = Product::count();
        $totalMainCategories = MainCategory::count();
        $totalSubCategories = SubCategory::count();
        $totalBlogs = AdminBlogModel::count();
        $totalServices = AdminServiceDetailsModel::count();

        // Recent Inquiries & AMC Requests
        $recentInquiries = InquryWindowModel::latest()->take(5)->get();
        $recentAMC = AMCReqModel::latest()->take(5)->get();
        $recentSupport = ContactusModel::latest()->take(5)->get();

        // Monthly trends for the current year
        $currentYear = Carbon::now()->year;
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $monthlyInquiries = array_fill(0, 12, 0);
        $monthlyAMC = array_fill(0, 12, 0);

        $inquiryData = InquryWindowModel::whereYear('created_at', $currentYear)
            ->selectRaw('MONTH(created_at) as month, count(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $amcData = AMCReqModel::whereYear('created_at', $currentYear)
            ->selectRaw('MONTH(created_at) as month, count(*) as total')
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        for ($i = 1; $i <= 12; $i++) {
            $monthlyInquiries[$i - 1] = $inquiryData[$i] ?? 0;
            $monthlyAMC[$i - 1] = $amcData[$i] ?? 0;
        }

        // Category Product Distribution
        $categoriesWithProductCount = MainCategory::withCount('products')->get();
        $categoryLabels = $categoriesWithProductCount->pluck('main_category')->toArray();
        $categoryProductCounts = $categoriesWithProductCount->pluck('products_count')->toArray();

        return view('admin.index', compact(
            'totalInquiries',
            'totalAMC',
            'totalSupport',
            'totalProducts',
            'totalMainCategories',
            'totalSubCategories',
            'totalBlogs',
            'totalServices',
            'recentInquiries',
            'recentAMC',
            'recentSupport',
            'months',
            'monthlyInquiries',
            'monthlyAMC',
            'categoryLabels',
            'categoryProductCounts'
        ));
    }
}
