<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::get('/home', [StudentController::class, 'home'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
