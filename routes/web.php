<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/reservations', function () {
    return view('frontend.reservations');
});

Route::get('/menu', function () {
    return view('frontend.menu');
});

Route::get('/newsevents', function () {
    return view('frontend.newsevents');
});

Route::get('/contacts', function () {
    return view('frontend.contacts');
});

Route::get('/calender', function () {
    return view('frontend.calender');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';