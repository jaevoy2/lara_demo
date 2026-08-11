<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
});

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/9ser-login', [UserController::class, 'userLogin'])->name('user-login');
Route::get('/home', [UserController::class, 'homeView'])->name('home');