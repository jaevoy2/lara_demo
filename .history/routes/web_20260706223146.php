<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});