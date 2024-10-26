<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/Book-Now', function () {
    return view('booknow');
});

// Store a new booking
Route::post('/Book-Now', [BookingController::class, 'store'])->name('bookings.store');

// Other routes
Route::get('/best-trekking-times', function () {
    return view('trektimes');
});

Route::get('/destination', function () {
    return view('destination');
});

// Admin Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.adminhome');
    })->name('dashboard');

   Route::get('/admin-enquiry-details', [ContactController::class,'index']);

    Route::get('/admin-package-details', [PackageController::class, 'index'])->name('packages.index');

    Route::get('/admin-add-trek', function () {
        return view('admin.addTrekDetails');
    });

    Route::get('/admin-add-review', function () {
        return view('admin.addReview');
    });

    // Booking details routes
    Route::get('/admin-booking-details', [BookingController::class, 'index'])->name('bookings.index');
    Route::delete('/admin-booking-details/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    // Update the review details route
    Route::get('/admin-review-details', [ReviewController::class, 'index'])->name('admin.reviews.index');

    // Resource routes for packages and reviews
    Route::resource('packages', PackageController::class);
    Route::resource('reviews', ReviewController::class);
    Route::delete('/admin-enquiry-details/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

});
