<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function create()
    {
        //
        return view('login');
    }

    // Authentication function
    public function store(Request $request)
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        // attempt to authenticate and log in the user
        if (auth()->attempt($attributes)) {
            // create new session
            session()->regenerate();
        }
    }
}
