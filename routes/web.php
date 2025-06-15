<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

Route::view('', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware('auth')
    ->name('dashboard');

// Prevent access to login/register pages for authenticated users
Route::middleware('guest')->group(function () {
    Route::view('login', 'login')->name('login');
    Route::post('/login', LoginController::class)->name('login-attempt');

    Route::view('register', 'register')->name('register');
    Route::post('/register', RegisterController::class)->name('register.store');
});

// Logout (only for authenticated users)
Route::post('logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');
