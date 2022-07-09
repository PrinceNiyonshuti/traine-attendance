<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        $trainees = User::where('role_id','=','2')->count();
        $activeTrainees = User::where('role_id','=','2')->count();
        $attendance = User::where('role_id','=','2')->count();
        $analytics = [$trainees];
        return view(
            '/mentor/index',
            ["analytics" => $analytics]
        );
    }
}
