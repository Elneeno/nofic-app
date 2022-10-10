<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/about_md', function () {
    return view('about_md');
})->name('about_md');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/news_item', function () {
    return view('news_item');
})->name('news_item');

Route::get('/about_fistula', function () {
    return view('about_fistula');
})->name('about_fistula');

Route::get('/document', function () {
    return storage::download('September_news_bulletin.pdf');
})->name('september_news_bulletin');

require __DIR__.'/auth.php';
