<?php

use App\Http\Controllers\AdminAboutCompanyController;
use App\Http\Controllers\AdminAboutNumbersController;
use App\Http\Controllers\AdminAMCController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminContactusController;
use App\Http\Controllers\AdminHomeBannerController;
use App\Http\Controllers\AdminInquiryWindowController;
use App\Http\Controllers\AdminOfferController;
use App\Http\Controllers\AdminOtherBannerController;
use App\Http\Controllers\AdminServiceDetailsController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminTestimonialController;
use App\Http\Controllers\AMCInquiryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FrontAboutController;
use App\Http\Controllers\FrontBlogsController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontServiceController;
use App\Http\Controllers\InquiryWindowController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;



// ==========================================================================================================================================
// Fallback route to handle 404 errors ======================================================================================================
Route::fallback(function () {
    return response()->view('error-page', [], 404);
});
// Fallback route to handle 404 errors ======================================================================================================
// ==========================================================================================================================================








// ==========================================================================================================================================
// Admin Dashboard Route & Profile Route ====================================================================================================
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// Admin Dashboard Route & Profile Route ====================================================================================================
// ==========================================================================================================================================







// ===========================================================================================================================================
// ADMIN AUTH ROUTES =========================================================================================================================

Route::get('/admin-home-banner', function () {
    return view('admin.admin-home-banner');
})->middleware(['auth', 'verified'])->name('admin-home-banner');


Route::get('/admin-other-banner', function () {
    return view('admin.admin-other-banner');
})->middleware(['auth', 'verified'])->name('admin-other-banner');


Route::get('/admin-about', function () {
    return view('admin.admin-about-company');
})->middleware(['auth', 'verified'])->name('admin-about-company');


Route::get('/admin-numbers', function () {
    return view('admin.admin-about-numbers');
})->middleware(['auth', 'verified'])->name('admin-about-numbers');


Route::get('/product-main-category', function () {
    return view('admin.admin-main-category');
})->middleware(['auth', 'verified'])->name('admin-main-category');


Route::get('/product-sub-category', function () {
    return view('admin.admin-sub-category');
})->middleware(['auth', 'verified'])->name('admin-sub-category');


Route::get('/product-details', function () {
    return view('admin.admin-product-details');
})->middleware(['auth', 'verified'])->name('admin-product-details');


Route::get('/window-service', function () {
    return view('admin.admin-service-details');
})->middleware(['auth', 'verified'])->name('admin-service-details');


Route::get('/amc-offers', function () {
    return view('admin.admin-amc-offer');
})->middleware(['auth', 'verified'])->name('admin-amc-offer');


Route::get('/amc-request', function () {
    return view('admin.admin-amc-requests');
})->middleware(['auth', 'verified'])->name('admin-amc-requests');


Route::get('/amc-print', function () {
    return view('admin.admin-amc-print');
})->middleware(['auth', 'verified'])->name('admin-amc-print');


Route::get('/window-inquiry', function () {
    return view('admin.admin-window-inquiry');
})->middleware(['auth', 'verified'])->name('admin-window-inquiry');


Route::get('/inquiry-print', function () {
    return view('admin.admin-inquiry-print');
})->middleware(['auth', 'verified'])->name('admin-inquiry-print');


Route::get('/admin-blogs', function () {
    return view('admin.admin-blogs');
})->middleware(['auth', 'verified'])->name('admin-blogs');


Route::get('/admin-testimonial', function () {
    return view('admin.admin-testimonials');
})->middleware(['auth', 'verified'])->name('admin-testimonials');


Route::get('/teams', function () {
    return view('admin.admin-teams');
})->middleware(['auth', 'verified'])->name('admin-teams');


Route::get('/customer-support', function () {
    return view('admin.admin-customer-support');
})->middleware(['auth', 'verified'])->name('admin-customer-support');
// ADMIN AUTH ROUTES =========================================================================================================================
// ===========================================================================================================================================









// =================================================================================================================================================
// ============================================= Client Data Send Routes ===========================================================================
Route::get('/amc', [AMCInquiryController::class, 'amcView'])->name('amc');
Route::post('/amc', [AMCInquiryController::class, 'store'])->name('amc.store');
Route::get('/inquiry', [InquiryWindowController::class, 'inquiryView'])->name('inquiry');
Route::post('/inquiry', [InquiryWindowController::class, 'store'])->name('inquiry.store');
Route::post('/support', [ContactusController::class, 'support'])->name('support');
// ============================================= Client Data Send Routes ===========================================================================
// =================================================================================================================================================
















// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Home API Routes >>>>>>>>>>>>>>>>>>>=====================================================
// =========================================================================================================================================
Route::get('/', [FrontHomeController::class, 'getall'])->name('getall');
Route::get('/service-details/{id}', [FrontHomeController::class, 'getServiceDetails'])->name('service.details');
Route::get('/product-view/{id}', [FrontHomeController::class, 'getProductDetails'])->name('product.view');
Route::get('/blog-details/{id}', [FrontHomeController::class, 'getBlogDetails'])->name('blog.details');
Route::post('/addBlog', [FrontHomeController::class, 'addBlog'])->name('addBlog');
// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Home API Routes >>>>>>>>>>>>>>>>>>>=====================================================
// =========================================================================================================================================





// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< About API Routes >>>>>>>>>>>>>>>>>>>====================================================
// =========================================================================================================================================
Route::get('/about', [FrontAboutController::class, 'getAllAbout'])->name('getAllAbout');
Route::get('/about/maincategory/{id}', [ProductController::class, 'getAllAbout'])->name('about.maincategory');
// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< About API Routes >>>>>>>>>>>>>>>>>>>====================================================
// =========================================================================================================================================





// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Product API Routes >>>>>>>>>>>>>>>>>>>==================================================
// =========================================================================================================================================
Route::get('/get-products/{id}', [FrontAboutController::class, 'getProduct'])->name('product.show');
// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Product API Routes >>>>>>>>>>>>>>>>>>>==================================================
// =========================================================================================================================================





// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Service API Routes >>>>>>>>>>>>>>>>>>>==================================================
// =========================================================================================================================================
Route::get('/service', [FrontServiceController::class, 'getAllService'])->name('getAllService');
// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Service API Routes >>>>>>>>>>>>>>>>>>>==================================================
// =========================================================================================================================================





// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Blog API Routes >>>>>>>>>>>>>>>>>>>=====================================================
// =========================================================================================================================================
Route::get('/blog', [FrontBlogsController::class, 'getAllBlog'])->name('getAllBlog');
// =========================================================================================================================================
// ============================<<<<<<<<<<<<<<<<<<<< Blog API Routes >>>>>>>>>>>>>>>>>>>=====================================================
// =========================================================================================================================================





















// ==========================================================================================================================================
// ========================================<<<<<<<<<<<<<<< Admin API Route >>>>>>>>>>>>>>>>>=================================================
// ==========================================================================================================================================
Route::get('/admin-home-banner', [AdminHomeBannerController::class, 'getHomeBanner'])->name('getHomeBanner');
Route::post('/admin-home-banner/add', [AdminHomeBannerController::class, 'addHomeBanner'])->name('addHomeBanner');
Route::put('/admin-home-banner/edit/{id}', [AdminHomeBannerController::class, 'editHomeBanner'])->name('editHomeBanner');
Route::delete('/admin-home-banner/delete/{id}', [AdminHomeBannerController::class, 'deleteHomeBanner'])->name('deleteHomeBanner');


Route::get('/admin-other-banner', [AdminOtherBannerController::class, 'getOtherBanner'])->name('getOtherBanner');
Route::post('/admin-other-banner/add', [AdminOtherBannerController::class, 'addOtherBanner'])->name('addOtherBanner');
Route::put('/admin-other-banner/edit/{id}', [AdminOtherBannerController::class, 'editOtherBanner'])->name('editOtherBanner');
Route::delete('/admin-other-banner/delete/{id}', [AdminOtherBannerController::class, 'deleteOtherBanner'])->name('deleteOtherBanner');


Route::get('/admin-about', [AdminAboutCompanyController::class, 'getAboutCompany'])->name('getAboutCompany');
Route::post('/admin-about/add', [AdminAboutCompanyController::class, 'addAboutCompany'])->name('addAboutCompany');
Route::put('/admin-about/edit/{id}', [AdminAboutCompanyController::class, 'editAboutCompany'])->name('editAboutCompany');
Route::delete('/admin-about/delete/{id}', [AdminAboutCompanyController::class, 'deleteAboutCompany'])->name('deleteAboutCompany');


Route::get('/admin-numbers', [AdminAboutNumbersController::class, 'getAboutNumbers'])->name('getAboutNumbers');
Route::post('/admin-numbers/add', [AdminAboutNumbersController::class, 'addAboutNumbers'])->name('addAboutNumbers');
Route::put('/admin-numbers/edit/{id}', [AdminAboutNumbersController::class, 'editAboutNumbers'])->name('editAboutNumbers');
Route::delete('/admin-numbers/delete/{id}', [AdminAboutNumbersController::class, 'deleteAboutNumbers'])->name('deleteAboutNumbers');


Route::get('/product-main-category', [MainCategoryController::class, 'getMainC'])->name('getMainC');
Route::post('/product-main-category/add', [MainCategoryController::class, 'addMainC'])->name('addMainC');
Route::put('/product-main-category/edit/{id}', [MainCategoryController::class, 'editMainC'])->name('editMainC');
Route::delete('/product-main-category/delete/{id}', [MainCategoryController::class, 'deleteMainC'])->name('deleteMainC');


Route::get('/product-sub-category', [SubCategoryController::class, 'getSubC'])->name('getSubC');
Route::post('/product-sub-category/add', [SubCategoryController::class, 'addSubC'])->name('addSubC');
Route::put('/product-sub-category/edit/{id}', [SubCategoryController::class, 'editSubC'])->name('editSubC');
Route::delete('/product-sub-category/delete/{id}', [SubCategoryController::class, 'deleteSubC'])->name('deleteSubC');


Route::get('/product-details', [ProductController::class, 'getProduct'])->name('getProduct');
Route::post('/product-details/add', [ProductController::class, 'addProduct'])->name('addProduct');
Route::put('/product-details/edit/{id}', [ProductController::class, 'editProduct'])->name('editProduct');
Route::delete('/product-details/delete/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/get-subcategories/{mainCategoryId}', [ProductController::class, 'getSubCategories']);


Route::get('/window-service', [AdminServiceDetailsController::class, 'getService'])->name('getService');
Route::post('/window-service/add', [AdminServiceDetailsController::class, 'addService'])->name('addService');
Route::put('/window-service/edit/{id}', [AdminServiceDetailsController::class, 'editService'])->name('editService');
Route::delete('/window-service/delete/{id}', [AdminServiceDetailsController::class, 'deleteService'])->name('deleteService');


Route::get('/amc-request', [AdminAMCController::class, 'getAMC'])->name('getAMC');
Route::get('/download-pdf/{id}', [AdminAMCController::class, 'pdf_create'])->name('pdf_create');
Route::delete('/amc/delete/{id}', [AdminAMCController::class, 'deleteRequest'])->name('deleteRequest');


Route::get('/window-inquiry', [AdminInquiryWindowController::class, 'getInquiry'])->name('getInquiry');
Route::get('/download-inquiry/{id}', [AdminInquiryWindowController::class, 'download_inquiry'])->name('download_inquiry');
Route::delete('/inquiry/delete/{id}', [AdminInquiryWindowController::class, 'deleteInquiry'])->name('deleteInquiry');


Route::get('/amc-offers', [AdminOfferController::class, 'getoffer'])->name('getoffer');
Route::post('/amc-offers/add', [AdminOfferController::class, 'addoffer'])->name('addoffer');
Route::put('/amc-offers/edit/{id}', [AdminOfferController::class, 'editoffer'])->name('editoffer');
Route::delete('/amc-offers/delete/{id}', [AdminOfferController::class, 'deleteoffer'])->name('deleteoffer');


Route::get('/customer-support', [AdminContactusController::class, 'getsupport'])->name('getsupport');
Route::delete('/customer-support/delete/{id}', [AdminContactusController::class, 'deletesupport'])->name('deletesupport');


Route::get('/admin-blogs', [AdminBlogController::class, 'getblog'])->name('getblog');
Route::post('/admin-blogs/add', [AdminBlogController::class, 'addblog'])->name('addblog');
Route::put('/admin-blogs/edit/{id}', [AdminBlogController::class, 'editblog'])->name('editblog');
Route::delete('/admin-blogs/delete/{id}', [AdminBlogController::class, 'deleteblog'])->name('deleteblog');


Route::get('/admin-testimonial', [AdminTestimonialController::class, 'get'])->name('get');
Route::post('/admin-testimonial/add', [AdminTestimonialController::class, 'add'])->name('add');
Route::put('/admin-testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('edit');
Route::delete('/admin-testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('delete');


Route::get('/teams', [AdminTeamController::class, 'gett'])->name('gett');
Route::post('/teams/add', [AdminTeamController::class, 'addt'])->name('addt');
Route::put('/teams/edit/{id}', [AdminTeamController::class, 'editt'])->name('editt');
Route::delete('/teams/delete/{id}', [AdminTeamController::class, 'deletet'])->name('deletet');
// ==========================================================================================================================================
// ========================================<<<<<<<<<<<<<<< Admin API Route >>>>>>>>>>>>>>>>>=================================================
// ==========================================================================================================================================
