<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
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
        $activationCode = random_int(100000, 999999);
        $token = Str::random(64);

        Notification::route('mail', $user->email)->notify(new PasswordReset($token, $activationCode));
        
        return back()->with('success', 'Check your email for the password reset code');
    }
}
