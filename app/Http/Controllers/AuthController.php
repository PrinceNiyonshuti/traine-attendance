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
        //
        dd($request);
    }
}
