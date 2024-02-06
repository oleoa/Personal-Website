<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\System;
use App\Http\Controllers\Home;
use App\Http\Controllers\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index'])->name('home');

// System changes routes
Route::controller(System::class)->group(function(){

    // Swicth between light and dark mode
    Route::get('/switchmode', 'switchmode')->name('switchmode');
    Route::get('/darkmode', 'darkmode')->name('darkmode');
    Route::get('/lightmode', 'lightmode')->name('lightmode');
    
    // Change the language
    Route::get('/language/{locale}', 'language')->name('language');

});

// Auth routes
Route::controller(Auth::class)->group(function(){

    // Login routes
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login');

    // Register routes
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register');

    // Logout routes
    Route::get('/logout', 'logout')->name('logout');

});
