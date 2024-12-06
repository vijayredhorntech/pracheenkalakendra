<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // check if user is in the database
        if (auth()->attempt($request->only('email', 'password'))) {
            session()->put('user', auth()->user());
            return redirect()->route('dashboard');
        }
        session()->flash('error', 'The provided credentials do not match our records.');
        return back();
    }

}
