<?php

use App\Http\Controllers\TraineeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
// Trainee registration
Route::get('/login', [TraineeController::class, 'create'])->middleware('guest');

// Trainee registration
Route::get('/register', [TraineeController::class, 'create'])->middleware('guest');
Route::post('/trainee/new-account', [TraineeController::class, 'store'])->middleware('guest');

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/activateAccount', function () {
    return view('activate');
});

Route::get('/mentor', function () {
    return view('/mentor/index');
});

Route::get('/allTrainnes', function () {
    return view('/mentor/trainnes');
});

Route::get('/allAttendance', function () {
    return view('/mentor/attendance');
});

Route::get('/mentorSettings', function () {
    return view('/mentor/settings');
});

Route::get('/networks', function () {
    return view('/mentor/networks');
});

Route::get('/notifications', function () {
    return view('/mentor/notifications');
});

Route::get('/permissions', function () {
    return view('/mentor/permissions');
});

Route::get('/logs', function () {
    return view('/mentor/logs');
});

Route::get('/report', function () {
    return view('/mentor/report');
});

Route::get('/profile-mentor', function () {
    return view('/mentor/profile');
});


// Trainee

Route::get('/trainee', function () {
    return view('/trainee/index');
});

Route::get('/traineeAttendance', function () {
    return view('/trainee/attendance');
});

Route::get('/traineePermission', function () {
    return view('/trainee/permission');
});

Route::get('/traineeSettings', function () {
    return view('/trainee/settings');
});

Route::get('/traineeNotifications', function () {
    return view('/trainee/notifications');
});

Route::get('/traineeProfile', function () {
    return view('/trainee/profile');
});

Route::get('/allowedNetworks', function () {
    return view('/trainee/networks');
});
