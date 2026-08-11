<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudents() {
        $student = Student::all();

        return response()->json([
            'student' => $student,
        ], 200);
    }
}
