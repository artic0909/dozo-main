<?php

use App\Http\Controllers\AdminAboutCompanyController;
use App\Http\Controllers\AdminAboutNumbersController;
use App\Http\Controllers\AdminHomeBannerController;
use App\Http\Controllers\AdminOtherBannerController;
use App\Http\Controllers\AdminServiceDetailsController;
use App\Http\Controllers\AMCRequestController;
use App\Http\Controllers\FrontAMCRequestController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;




// Fallback route to handle 404 errors
Route::fallback(function () {
    return response()->view('error-page', [], 404);
});





Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';









// ADMIN ROUTES =========================================================================================================================>

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










// Client View Routes ========================================================================================================================>
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product-upvc', function () {
    return view('product-upvc');
});

Route::get('/product-aluminium', function () {
    return view('product-aluminium');
});

Route::get('/product-view', function () {
    return view('product-view');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/amc', function () {
    return view('amc');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/inquiry', function () {
    return view('inquiry');
});


// Client Routes =========================================================================================================================>












// API Routes =========================================================================================================================>
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
