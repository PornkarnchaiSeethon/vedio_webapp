<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){return view('welcome');});

Route::get('/home', function(){return view('HomePage');})->middleware('auth');

Route::get('/login',[LoginController::class,'showLoginPage'])->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::get('/register', [RegisterController::class, 'showRegisterPage'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);