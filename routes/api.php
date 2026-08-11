<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login-user', [UserController::class, 'userLogin']);

Route::get('/get-students', [StudentController::class, 'getStudents']);
Route::post('/store-student', [StudentController::class, 'store']);
Route::post('/update-student', [StudentController::class, 'updateStudent']);
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);


Route::get('/products', [ProductController::class, 'index']);
Route::post('/update', [EmployeeController::class, 'edit']);
Route::get('/employee-attendance/{id}', [EmployeeController::class, 'getAttendances']);



Route::middleware('preventAccess')->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index']);
});