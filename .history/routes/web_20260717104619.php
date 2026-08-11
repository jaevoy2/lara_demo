<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('dashboard');
});

Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
Route::get('/home', [UserController::class, 'homeView'])->name('home');
Route::get('/student', [StudentController::class, 'studentsPage'])->name('student-page');

// Route::get('get-students', [StudentController::class, getStudents])->name('get-stude')