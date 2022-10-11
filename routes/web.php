<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\BulletinController;
use App\Http\Controllers\news;


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

Route::get('/documents', function () {
    return view('bulletin_list');
})->name('documents');


// ADMIN Pages


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/news_insert', function () {
    return view('news_insert');
})->name('news_insert');


Route::get('/news_home', function () {
    return view('news_home');
})->name('news_home');

// Bulletin
Route::resource('bulletin', BulletinController::class);

Route::get('/insert_bulletin', function () {
    return view('insert_bulletin');
})->name('insert_bulletin');



require __DIR__.'/auth.php';
