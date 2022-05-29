<?php

// For chat feature
namespace App\Events;

use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

// Default code
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::middleware(['auth', 'isNewUser'])->group(function () {
    Route::GET('change-password', [UserController::class, 'changePasswordPage']);
    Route::POST('change-password', [UserController::class, 'changePassword']);
});

// Admin Route
Route::middleware(['auth', 'isAdmin'])->group(function () {
    // go to admin dashboard
    Route::GET('admin', [AdminController::class, 'index']);
    // got to user list
    Route::GET('admin/users', [AdminController::class, 'user']);
    Route::GET('admin/users/add', [AdminController::class, 'addUserPage']);
    Route::POST('admin/users/add', [AdminController::class, 'addUser']);
    // go to user registration data
    Route::GET('admin/users-registration', [AdminController::class, 'userRegistration']);
    // to accept user
    Route::PUT('admin/users-registration/{id}', [AdminController::class, 'accept']);
    Route::Delete('admin/users-registration/{id}', [AdminController::class, 'reject']);
    Route::GET('admin/users/{user}/edit', [AdminController::class, 'showUser']);
    Route::PUT('admin/users/update/{id}', [AdminController::class, 'updateUser']);
    // to delete user
    Route::DELETE('admin/users/delete', [AdminController::class, 'deleteUsers']);
    // QUOTE
    // go to quote page
    Route::GET('admin/quotes', [AdminController::class, 'quote']);
    // go to add quote page
    Route::GET('admin/addquote', [AdminController::class, 'addQuote']);
    // to add quote
    Route::POST('admin/addquote', [AdminController::class, 'createQuote']);
    // go to update quote
    Route::GET('admin/quotes/{quote}/edit', [AdminController::class, 'showQuote']);
    // update quote
    Route::PUT('admin/updatequote/{id}', [AdminController::class, 'updateQuote']);
    // delete quote
    Route::DELETE('admin/deletequote', [AdminController::class, 'deleteQuote']);
    // VIDEOS
    Route::GET('admin/videos', [AdminController::class, 'videos']);
    Route::GET('admin/addvideos', [AdminController::class, 'addVideos']);
    Route::POST('admin/addvideos', [AdminController::class, 'createVideos']);
    Route::GET('admin/video/{video}/edit', [AdminController::class, 'showVideo']);
    Route::PUT('admin/updatevideo/{id}', [AdminController::class, 'updateVideo']);
    Route::DELETE('admin/deletevideos/{id}', [AdminController::class, 'deleteVideos']);
    // PATIENTS
    Route::GET('admin/patients', [AdminController::class, 'patients']);
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
    Route::GET('/konsultasi-langsung', [
        UserController::class,
        'konsulLangsung',
    ]);
    Route::GET('get-antrian', [UserController::class, 'getAntrian']);
});

// Doctor Controller
Route::middleware(['auth', 'isDoctor'])->group(function () {
    // go to landing page
    Route::GET('doctor', [DoctorController::class, 'index']);
    // go to online consultation page
    Route::GET('doctor/konsul', [DoctorController::class, 'onlineConsultation']);
    // go to patients page
    Route::GET('doctor/patients', [DoctorController::class, 'patients']);
});

Route::middleware('auth')->group(function () {
    // logout account
    Route::POST('logout', [LoginController::class, 'logout']);
});

// go to konsul page
Route::GET('/konsultasionline', function () {
    return view('konsul', [
        'title' => 'Konsultasi Online',
    ]);
});
// Route::GET('/konsultasionline', [UserController::class, 'konsulOnline']);

// go to quote page
Route::GET('/quote', function () {
    $quote = DB::table('quotes')->paginate(6);
    //$quote = json_decode($quote, true);
    return view('quotes', [
        'title' => 'Quotes',
        'quote' => $quote,
    ]);
});
// Route::GET('quote', [UserController::class, 'quote']);

// go to video booster page
Route::GET('/video-booster', function () {
    $video = DB::table('videos')->paginate(4);
    return view('video', [
        'title' => 'Video Booster',
        'video' => $video,
    ]);
});
// Route::GET('video-booster', [UserController::class, 'videoBooster']);

// send message
Route::post('/send-message', function (Request $request) {
    event(new Message($request->input('username'), $request->input('message')));
    return ['success' => true];
});
