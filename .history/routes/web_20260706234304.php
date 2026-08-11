<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
})-name('login');

Route::post('/login', [UserController::class, 'userLogin'])->name('user-login');
Route::get('/home', [UserController::class, 'homeView'])->name('home');