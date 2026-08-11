<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', [UserController::class, 'userView'])->name('users');





// Route::post('/user-login', [UserController::class, 'userLogin'])->name('userLogin');
// Route::get('/student', [StudentController::class, 'studentsPage'])->name('student-page');

// Route::get('get-students', [StudentController::class, getStudents])->name('get-stude')