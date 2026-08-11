<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/home', [UserController::class, 'homeView'])->name('home');

// Route::get('get-students', [StudentController::class, getStudents])->name('get-stude')