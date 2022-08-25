<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trainee;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\LeavePermission;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        $trainees = Trainee::count();
        $allTrainees = Trainee::get();
        $activeTrainees = Trainee::where('status','=','1')->count();
        $attendance = Attendance::whereDate('created_at', Carbon::today())->count();
        $permissions = LeavePermission::where('leaveStatus','=','1')->count();
        $analytics = [$trainees,$activeTrainees,$attendance,$permissions];
        return view(
            '/dashboard/index',
            ["analytics" => $analytics,'trainees'=>$allTrainees]
        );
    }
}
