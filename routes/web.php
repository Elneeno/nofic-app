<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\BulletinController;
use App\Http\Controllers\NewsController;

use App\Models\Bulletin;


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

    $bulletin = Bulletin::all();
    
    return view('index', ['bulletin' => $bulletin]);
})->name('home');


Route::get('/about', function () {
    $bulletin = Bulletin::all();
    return view('about',['bulletin'=>$bulletin]);
})->name('about');

Route::get('/about_md', function () {
    $bulletin = Bulletin::all();
    return view('about_md',['bulletin'=>$bulletin]);
})->name('about_md');

Route::get('/contact', function () {
    $bulletin = Bulletin::all();
    return view('contact',['bulletin'=>$bulletin]);
})->name('contact');

Route::get('/gallery', function () {
    $bulletin = Bulletin::all();
    return view('gallery',['bulletin'=>$bulletin]);
})->name('gallery');

Route::get('/news', function () {
    $bulletin = Bulletin::all();
    return view('news',['bulletin'=>$bulletin]);
})->name('news');

Route::get('/news_item', function () {
    $bulletin = Bulletin::all();
    return view('news_item',['bulletin'=>$bulletin]);
})->name('news_item');

Route::get('/about_fistula', function () {
    $bulletin = Bulletin::all();
    return view('about_fistula',['bulletin'=>$bulletin]);
})->name('about_fistula');

Route::get('/documents', function () {
    $bulletin = Bulletin::all();
    return view('bulletin_list',['bulletin'=>$bulletin]);
})->name('documents');


// ADMIN Pages


Route::get('/dashboard', function () {
    $bulletin = Bulletin::all();
    $user = Auth::user();
    return view('dashboard',['bulletin'=>$bulletin, 'user'=>$user]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/news_insert', function () {
    $bulletin = Bulletin::all();
    return view('news_insert',['bulletin'=>$bulletin]);
})->name('news_insert');

Route::get('/news_home', function () {
    $bulletin = Bulletin::all();
    return view('news_home',['bulletin'=>$bulletin]);
})->name('news_home');



// Bulletin
Route::resource('bulletin', BulletinController::class);
// News
Route::resource('news', NewsController::class);

Route::get('/x', function () {
    return view('x');
})->name('x');

//make a route as a post 
Route::post("/logout",[LogoutController::class,"store"])->name("logout");

require __DIR__.'/auth.php';
