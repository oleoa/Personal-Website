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

Route::get('/', [Pages::class, 'Home'])->name('home');

Route::get('/portfolio', [Pages::class, 'Portfolio'])->name('portfolio');

Route::get('/library', [Pages::class, 'Library'])->name('library');

Route::get('/contact', [Pages::class, 'Contact'])->name('contact');
Route::post('/contact', [Requests::class, 'Contact'])->name('contact');

Route::controller(Library::class)->group(function(){

  Route::get('/sidebar', 'sidebar')->name('sidebar');

  Route::get('/loader', 'loader')->name('loader');

  Route::get('/faq', 'faq')->name('faq');

  Route::get('/carousel', 'carousel')->name('carousel');

  Route::get('/carousel2', 'carousel2')->name('carousel2');

});

/*
Route::get('/alice', [Pages::class, 'Alice'])->name('alice');
Route::get('/movies', [Requests::class, 'Movies'])->name('movie.get');
Route::post('/movies', [Requests::class, 'Movies'])->name('movie.save');
Route::delete('/movies', [Requests::class, 'Movies'])->name('movie.delete');
*/
