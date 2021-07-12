<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attributes)) {
        // return back()->withErrors(['login' => 'Incorrect email or password']);
        throw ValidationException::withMessages([
            'login' => 'Incorrect email or password'
        ]);
        }

        //session fixation
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'User logged out');
    }
}
