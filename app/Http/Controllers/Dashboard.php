<?php

namespace App\Http\Controllers;

use App\Models\LeavePermission;
use App\Models\Trainee;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        $trainees = Trainee::count();
        $activeTrainees = Trainee::where('status','=','1')->count();
        $attendance = User::where('role_id','=','2')->count();
        $permissions = LeavePermission::where('leaveStatus','=','1')->count();
        $analytics = [$trainees,$activeTrainees,$attendance,$permissions];
        return view(
            '/mentor/index',
            ["analytics" => $analytics]
        );
    }
}
