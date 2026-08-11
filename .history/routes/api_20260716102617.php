<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/get-student', [StudentController::class, 'getStudents']);
Route::post('/store-student', [StudentController::class, 'store']);
Route::post('/update-student', [StudentController::class, 'updateStudent']);
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);


Route::get('products', [ProductController::class, 'index']);