<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'HomePage');

Route::get('/login',[LoginController::class,'showLoginPage'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'login']);

Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/profile/{username}', ProfileController::class)->name('profile')->middleware('auth');

Route::view('/upload', "UploadPage")->name('upload')->middleware('auth');