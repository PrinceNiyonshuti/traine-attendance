<?php

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

Route::get('/register', function () {
    return view('register');
});

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

Route::get('/logs', function () {
    return view('/mentor/logs');
});

Route::get('/profile-mentor', function () {
    return view('/mentor/profile');
});


// Trainee

Route::get('/trainee', function () {
    return view('/trainee/index');
});

Route::get('/trainee', function () {
    return view('/trainee/attendance');
});

Route::get('/trainee', function () {
    return view('/trainee/permission');
});

Route::get('/trainee', function () {
    return view('/trainee/settings');
});
