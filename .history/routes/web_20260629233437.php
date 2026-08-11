<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'login'])->name('login');

Route::get('/welcom', function () {
    return view('welcome');
});
