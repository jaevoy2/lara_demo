<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            $request->session()->put('loginID', Auth::user()->id);

            return redirect()->intended(route('home'))
        }
    }

    public function homeView() {
        return view('home');
    }
}
