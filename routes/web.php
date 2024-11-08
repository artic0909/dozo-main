<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
