<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Book-Now', function () {
    return view('booknow');
});
Route::get('/best-trekking-times', function () {
    return view('trektimes');
});

Route::get('/destination', function () {
    return view('destination');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.adminhome');
    })->name('dashboard');
    Route::get('/admin-enquiry-details', function () {
        return view('admin.adminEnquiryTable');
    });
    Route::get('/admin-package-details', function () {
        return view('admin.adminPackageList');
    });
    Route::get('/admin-add-trek', function () {
        return view('admin.addTrekDetails');
    });
    Route::get('/admin-package-details', [PackageController::class, 'index'])->name('packages.index');

    Route::resource('packages', PackageController::class);

});
