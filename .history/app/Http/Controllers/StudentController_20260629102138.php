<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudents() {
        return response()->json([
            'student' => Student::all()
        ], 200);
    }
}
