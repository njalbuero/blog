<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);

        $user = User::create($attributes);
        Auth::login($user);

        // session()->flash('success', 'Account created');
        return redirect('/')->with('success', 'Account created');
    }
}
