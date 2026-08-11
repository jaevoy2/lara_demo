<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;




Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function() {
    return view('about');
})->name('aboutpage');

Route::get('/contact', function() {
    return view('contact');
})->name('contactpage');