<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;

class UserController extends Controller
{
    public function userLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('personal-token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'data' => $credentials
            ]);
        }else{
            return response()->json([
                'error' => 'Invalid Credentials'
            ]);
        }
    }

    

    public function loginPage() {
        return view('login');
    }

    public function homeView() {
        return view('home');
    }
}
