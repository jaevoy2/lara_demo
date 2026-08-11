<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/users', function () {
    return view('users');
})->name('userpage');


Route::get('/home', [UserController::class, 'homeView'])->name('home');

Route::get('/student', [StudentController::class, 'studentsPage'])->name('student-page');

// Route::get('get-students', [StudentController::class, getStudents])->name('get-stude')