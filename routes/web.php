<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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
Route::get('', function () {
    return view('landing', [
        'title' => 'Home',
    ]);
});

//go to landing page
Route::get('/index', function () {
    return view('landing', [
        'title' => 'Home',
    ]);
});

// go to konfirmasi page
Route::get('/konfirmasi', function () {
    return view('konfirmasi', [
        'title' => 'Konfirmasi',
    ]);
});


// Login & Logout route
// go to login page
Route::GET('login', [LoginController::class, 'index']);
// validation login
Route::POST('login', [LoginController::class, 'validation']);
// logout account
Route::POST('logout', [LoginController::class, 'logout']);



// Admin Route
Route::GET('admin', [AdminController::class, 'index']);
Route::GET('admin/users', [AdminController::class, 'user']);
Route::GET('admin/users-registration', [AdminController::class, 'userRegistration']);
Route::PUT('admin/users-registration/{id}', [AdminController::class, 'accept']);




// User Controller

// go to register page
Route::GET('register', [RegisterController::class, 'index']);
Route::POST('register', [RegisterController::class, 'store']);

// go to antrian page
Route::GET('/konsultasi-langsung', [UserController::class, 'konsulLangsung']);
Route::GET('get-antrian/{id}', [UserController::class, 'getAntrian']);

// go to konsul page
Route::GET('/konsultasionline', [UserController::class, 'konsulOnline']);

// go to detail pasien page
Route::get('/detailpasien', function () {
    return view('detailpasien');
});
