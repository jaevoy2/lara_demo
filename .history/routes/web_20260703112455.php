<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;




Route::get('/', function () {
    return view('home');
});
Route::get('/login', function() {
    return view('about');
});

