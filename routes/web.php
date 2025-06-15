<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::view('', 'welcome')->name('welcome');
Route::view('dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::view('login', 'login')->name('login');
Route::post('/login', LoginController::class)->name('login-attempt');
Route::view('register', 'register')->name('register');
Route::post('/register', RegisterController::class)->name('register.store');
Route::post('login', LogoutController::class)->name('logout');