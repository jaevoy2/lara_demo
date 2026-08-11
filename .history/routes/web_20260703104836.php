<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::get('/', [StudentController::class, 'home'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});
