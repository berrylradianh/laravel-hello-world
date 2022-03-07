<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/specials', function () {
    return view('specials');
});

Route::get('/myaccount', function () {
    return view('myaccount');
});

Route::get('/register2', function () {
    return view('register2');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
