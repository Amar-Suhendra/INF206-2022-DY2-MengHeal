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

// go to landing page
Route::get('/', function () {
    return view('landing');
});

//go to landing page
Route::get('/home', function () {
    return view('landing');
});

// go to login page
Route::get('/login', function () {
    return view('login');
});

// go to register page
Route::get('/register', function () {
    return view('register');
});

// go to antrian page
Route::get('/antrian', function () {
    return view('antrian');
});

// go to konsul page
Route::get('/konsul', function () {
    return view('konsul');
});

// go to detail pasien page
Route::get('/detailpasien', function () {
    return view('detailpasien');
});
