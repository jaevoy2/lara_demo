<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/home', [UserController::class, 'homeView'])->name('home');