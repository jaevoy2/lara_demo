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
        $students = Student::all();

        return compact('home', 'students');
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

    public function updateStudent(Request $request) {
        $validate = $request->validate([
            'name' => 'nullable|string',
            'adrress' => 'nullable|string'
        ]);

        $student = Student::find($request->id);

        if(!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

       $student->update($validate);
       
        return response()->json([
            'student' => $student
        ], 200);
    }
    
    public function deleteStudent($id) {
        $student = Student::find($id);

        if(!$student) {
            return response()->json([
                'message' => 'Student not found'
            ], 404);
        }

        $student->delete();

        return response()->json([
            'message' => 'Student deleted.'
        ], 200);
    }
}
