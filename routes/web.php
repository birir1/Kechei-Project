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

Route::get('/accomodation', function () {
    return view('frontend.accomodation');
});

Route::get('/recreation', function () {
    return view('frontend.recreation');
});

Route::get('/hotelrestaurant', function () {
    return view('frontend.hotelrestaurant');
});

Route::get('/massagetherapy', function () {
    return view('frontend.massagetherapy');
});

Route::get('/eventsparties', function () {
    return view('frontend.eventsparties');
}); 

Route::get('/conferences', function () {
    return view('frontend.conferences');
}); 

Route::get('/careers', function () {
    return view('frontend.careers');
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