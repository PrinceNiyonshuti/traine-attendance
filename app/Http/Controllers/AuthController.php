<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            // redirect to home page
            return redirect('/dashboard')->with('success', 'welcome back !');
        }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'See you soon !');
    }

    public function forgot(Request $request)
    {
        return view('forgot');
    }

    public function sendPasswordRecover(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email'
        ]);
        $user = User::where('email', $attributes['email'])->first();
        $user->password = Hash::make(Str::random(8));
        $user->save();
        Mail::to($user->email)->send(new PasswordRecover($user));
        return redirect('/')->with('success', 'Password has been sent to your email !');
    }
}
