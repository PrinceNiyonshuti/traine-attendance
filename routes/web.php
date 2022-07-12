<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\TraineeController;
use App\Models\Networks;
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


// Authentication
Route::get('/', [AuthController::class, 'create'])->middleware('guest')->name('/login');
Route::post('/login', [AuthController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');

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

Route::get('/mentor', [Dashboard::class, 'dashboard'])->middleware('auth');

Route::get('/networks', function () {
    return view('/mentor/networks');
});

Route::get('/networks', [Networks::class, 'index'])->middleware('auth');

Route::get('/networks', function () {
    return view('/mentor/networks');
});

Route::get('/allTrainnes', function () {
    return view('/mentor/trainnes');
});

Route::get('/allTrainnes',[TraineeController::class, 'index']);

Route::get('/allAttendance', function () {
    return view('/mentor/attendance');
});

Route::get('/mentorSettings', function () {
    return view('/mentor/settings');
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

Route::get('/profile', function () {
    return view('/components/profile');
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
