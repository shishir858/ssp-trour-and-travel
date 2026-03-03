<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RouteController as AdminRouteController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VehicleController as AdminVehicleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CabEnquiryController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Vehicles

// Locations
use App\Http\Controllers\LocationController;
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/{slug}', [LocationController::class, 'show'])->name('locations.show');

// Vehicles
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/luxury', [VehicleController::class, 'luxury'])->name('vehicles.luxury');
Route::get('/vehicles/{slug}', [VehicleController::class, 'show'])->name('vehicles.show');

// Routes
Route::get('/routes', [RouteController::class, 'index'])->name('routes.index');
Route::get('/routes/popular', [RouteController::class, 'popular'])->name('routes.popular');
Route::get('/routes/{slug}', [RouteController::class, 'show'])->name('routes.show');

// Guest Routes (Login/Register)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// Auth Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
    // Resource Routes
    Route::resource('vehicles', AdminVehicleController::class);
    Route::resource('routes', AdminRouteController::class);
    Route::resource('locations', \App\Http\Controllers\Admin\LocationController::class);
    // TinyMCE image upload
    Route::post('/tinymce-upload', [\App\Http\Controllers\Admin\TinyMCEUploadController::class, 'upload'])->name('tinymce.upload');

    // FAQ routes nested under locations
    Route::prefix('locations/{location}')->name('faqs.')->group(function () {
        Route::get('faqs', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('index');
        Route::get('faqs/create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('create');
        Route::post('faqs', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('store');
        Route::get('faqs/{faq}/edit', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('edit');
        Route::put('faqs/{faq}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('update');
        Route::delete('faqs/{faq}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('destroy');
    });
    // Enquiry Routes
    Route::get('/enquiries', [App\Http\Controllers\Admin\EnquiryController::class, 'index'])->name('enquiries.index');
    Route::get('/enquiries/{id}', [App\Http\Controllers\Admin\EnquiryController::class, 'show'])->name('enquiries.show');
    Route::put('/enquiries/{id}', [App\Http\Controllers\Admin\EnquiryController::class, 'update'])->name('enquiries.update');
});

// Cab Enquiry Routes
Route::post('/cab-enquiry', [CabEnquiryController::class, 'store'])->name('cab-enquiry.store');
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');
