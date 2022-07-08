<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        # code...
        if (auth()->user()?->level_id == '1') {
            # code...
            $trainees = User::where('level_id', '=', '2')->count();
            $analytics = [$trainees];
            return view(
                '/mentor/index',
                ["analytics" => $analytics]
            );
        } else {
            # code...
            return view('/mentor/index');
        }
    }
}
