<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Requests;
use App\Http\Controllers\Library;
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

/*
Route::domain('alicecapelo.leonardoabreu.com')->group(function(){
    
    Route::get('/', [Pages::class, 'Alice'])->name('alice');

    Route::get('/movies', [Requests::class, 'Movies'])->name('movie.get');

    Route::post('/movies', [Requests::class, 'Movies'])->name('movie.save');
    
    Route::delete('/movies', [Requests::class, 'Movies'])->name('movie.delete');
    
});
*/

Route::get('/', [Pages::class, 'Home'])->name('home');
Route::get('/41', [Pages::class, 'area41'])->name('41');

Route::get('/about', [Pages::class, 'About'])->name('about');

Route::get('/portfolio', [Pages::class, 'Portfolio'])->name('portfolio');

Route::get('/library', [Library::class, 'index'])->name('library');
Route::get('/sidebar', [Library::class, 'sidebar'])->name('sidebar');
Route::get('/loader', [Library::class, 'loader'])->name('loader');
Route::get('/faq', [Library::class, 'faq'])->name('faq');

Route::get('/contact', [Pages::class, 'Contact'])->name('contact');
Route::post('/contact', [Requests::class, 'Contact'])->name('contact');

Route::get('/instagram', [Pages::class, 'instagram'])->name('instagram');

/*
Route::get('/alice', [Pages::class, 'Alice'])->name('alice');
Route::get('/movies', [Requests::class, 'Movies'])->name('movie.get');
Route::post('/movies', [Requests::class, 'Movies'])->name('movie.save');
Route::delete('/movies', [Requests::class, 'Movies'])->name('movie.delete');
*/
