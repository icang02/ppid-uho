<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('username', 'password');


        $check = Auth::attempt($credentials);

        if ($check) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password invalid.')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
