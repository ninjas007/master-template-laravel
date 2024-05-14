<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProfileController;

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
// login socialite
Route::get('/auth/{provider}', [AuthController::class, 'redirectProvider'])->name('redirect.provider');
Route::get('/google/callback', [AuthController::class, 'callbackGoogle'])->name('google.callback');
Route::get('/facebook/callback', [AuthController::class, 'callbackFacebook'])->name('facebook.callback');

// auth frontend
Route::post('/loginUser', [AuthController::class, 'login'])->name('login.user');
Route::post('/signupUser', [AuthController::class, 'signup'])->name('signup.user');

// frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// account
Route::prefix('account')
->middleware(['auth', 'user'])
->group(function () {
    Route::get('/profile', [AccountController::class, 'index']);
    Route::post('/save', [AccountController::class, 'save'])->name('account.save');
});

// backend
Route::get('/admin', function() {
    return redirect('admin/dashboard');
});

Route::prefix('admin')
->middleware(['auth', 'admin'])
->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/general-dashboard', [DashboardController::class, 'index']);

    // profile
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index']);
        Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
