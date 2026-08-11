<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function login() {
        return view('login');
    }

    public function home() {
        return view('home');
    }

    public function getStudents() {
        return response()->json([
            'student' => Student::all()
        ], 200);
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'name' => 'required|string',
            'adrress' => 'required|string'
        ]);

        $student = Student::create($validate);

        return response()->json([
            'student' => $student
        ], 200);
    }
}
