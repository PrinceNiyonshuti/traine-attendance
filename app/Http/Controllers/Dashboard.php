<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        $trainees = User::count();
        $analytics = [$trainees];
        return view(
            '/mentor/index',
            ["analytics" => $analytics]
        );
    }
}
