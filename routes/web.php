<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Requests;
use App\Http\Controllers\Pages;

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

Route::domain('alicecapelo.leonardoabreu.com')->group(function(){
    
    Route::get('/', [Pages::class, 'Alice'])->name('alice');

    Route::post('/movies', [Pages::class, 'Movies'])->name('movie');
    
});

Route::domain('leonardoabreu.com')->group(function(){

    Route::get('/', [Pages::class, 'Home'])->name('home');

    Route::get('/about', [Pages::class, 'About'])->name('about');

    Route::get('/portfolio', [Pages::class, 'Portfolio'])->name('portfolio');
    
    Route::get('/skills', [Pages::class, 'Skills'])->name('skills');

    Route::get('/contact', [Pages::class, 'Contact'])->name('contact');

    Route::post('/contact', [Requests::class, 'Contact'])->name('contact');
    
});

/*
Route::get('/', [Pages::class, 'Home'])->name('home');

Route::get('/about', [Pages::class, 'About'])->name('about');

Route::get('/portfolio', [Pages::class, 'Portfolio'])->name('portfolio');

Route::get('/skills', [Pages::class, 'Skills'])->name('skills');

Route::get('/contact', [Pages::class, 'Contact'])->name('contact');

Route::post('/contact', [Requests::class, 'Contact'])->name('contact');

Route::get('/alice', [Pages::class, 'Alice'])->name('alice');
Route::post('/movies', [Requests::class, 'Movies'])->name('movie');
*/