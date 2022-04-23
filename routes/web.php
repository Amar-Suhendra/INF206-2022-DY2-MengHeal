<?php

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

// go to login page
Route::GET('login', [LoginController::class, 'index']);
// validation login
Route::POST('login', [LoginController::class, 'validation']);
// go to register page
Route::GET('register', [RegisterController::class, 'index']);
Route::POST('register', [RegisterController::class, 'store']);

// go to antrian page
Route::GET('/konsultasilangsung', [UserController::class, 'konsulLangsung']);
Route::GET('/getantrian', [UserController::class, 'getAntrian']);

// go to konsul page
Route::GET('/konsultasionline', [UserController::class, 'konsulOnline']);

// go to detail pasien page
Route::get('/detailpasien', function () {
    return view('detailpasien');
});
