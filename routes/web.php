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
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/proof', function () {
    return view('proof');
});

Route::get('/scholarshipdetails', function () {
    return view('scholarshipdetails');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/termination', function () {
    return view('termination');
});

Route::get('/scholarshipprograms', function () {
    return view('scholarshipprograms');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/profilestudent', function () {
    return view('profilestudent');
});

Route::get('/dorm', function () {
    return view('dorm');
});
Route::get('/oncampus', function () {
    return view('oncampus');
});

Route::get('/offcampus', function () {
    return view('offcampus');
});

Route::get('/applicationlist', function () {
    return view('applicationlist');
});

Route::get('/home', function () {
    return view('home');
});