<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/get-students', [StudentController::class, 'getStudents']);
Route::post('/store-student', [StudentController::class, 'store']);
Route::post('/update-student', [StudentController::class, 'updateStudent']);
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);