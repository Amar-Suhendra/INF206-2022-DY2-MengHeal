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


// Login & Logout route
Route::middleware('guest')->group(function () {
    // go to login page
    Route::GET('login', [LoginController::class, 'index'])->name('login');
    // validation login
    Route::POST('login', [LoginController::class, 'validation']);
    // go to register page
    Route::GET('register', [RegisterController::class, 'index']);
    Route::POST('register', [RegisterController::class, 'store']);
    // go to landing page
    Route::GET('', [UserController::class, 'index']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    // Admin Route
    Route::GET('admin', [AdminController::class, 'index']);
    Route::GET('admin/users', [AdminController::class, 'user']);
    Route::GET('admin/users-registration', [AdminController::class, 'userRegistration']);
    Route::PUT('admin/users-registration/{id}', [AdminController::class, 'accept']);
    Route::GET('admin/quote', [AdminController::class, 'quote']);
    Route::POST('admin/quote', [AdminController::class, 'addQuote']);
    // go to detail pasien page
    Route::get('/detailpasien', function () {
        return view('detailpasien');
    });
});



// User Controller
Route::middleware(['auth', 'user'])->group(function () {
    //go to landing page
    Route::GET('index', [UserController::class, 'index']);
    // go to konfirmasi page
    Route::get('/konfirmasi', function () {
        return view('konfirmasi', [
            'title' => 'Konfirmasi',
        ]);
    });
    // go to antrian page
    Route::GET('/konsultasi-langsung', [UserController::class, 'konsulLangsung']);
    Route::GET('get-antrian', [UserController::class, 'getAntrian']);
    // go to konsul page
    Route::GET('/konsultasionline', [UserController::class, 'konsulOnline']);
    // go to quote page
    Route::GET('quote', [UserController::class, 'quote']);
    // go to video booster page
    Route::GET('video-booster', [UserController::class, 'videoBooster']);
});

Route::middleware('auth')->group(function () {
    // logout account
    Route::POST('logout', [LoginController::class, 'logout']);
});
