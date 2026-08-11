<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function userLogin(Request $request) {
        dd($request);

        if(empty($request->email) || empty($request->password)) {
            return redirect(route('login'))
            ->with('error', 'Email and password are required');
        }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->put('loginID', Auth::user()->id);

            return redirect()->intended(route('home'))
                ->with('success', 'Logged In');
        }else{
            return redirect(route('login'))
                ->withInput()
                ->with('error', 'Invalid credentials');
        }
    }

    public function loginPage() {
        return view('login');
    }

    public function userView() {
        return view('users');
    }
}
