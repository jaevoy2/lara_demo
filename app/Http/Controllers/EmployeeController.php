<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        return response()->json([
            'data' => Employee::all() 
        ], 200);
    }

    public function edit(Request $request) {
        $emp = Employee::find($request->id);

        if(!$emp) {
            return response()->json([
                'message' => 'Employee not found.' 
            ], 200);   
        }

        $validate = $request->validate([
            'name' => 'string|nullable',
            'address' => 'string|nullable'
        ]);

        $employee = $emp->update($validate);

        return response()->json([
            'data' => $employee
        ], 200);
    }


    public function getAttendances($id) {
        $employee = Employee::where('id', $id)
            ->with('attendances')
            ->first();

        if(!$employee) {
            return response()->json([
                'message' => 'Employee not found.'
            ], 404);
        }

        return response()->json([
            'data' => $employee
        ], 200);
    }
}
