<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashbooard()
    {
        # code...
        if (auth()->user()?->level_id == '1') {
            # code...
            return view('dashboard.dashboard');
        } else {
            # code...
            return view('dashboard.dashboard_trainee');
        }
    }
}
