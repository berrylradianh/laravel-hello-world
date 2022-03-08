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
    return view('welcome', [
        "title" =>  "Home",
        "description" => "Featured Products"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" =>  "About",
        "description" => "About Us"
    ]);
});

Route::get('/category', function () {
    return view('category',[
        "title" => "Category",
        "description" => "Category Products",
        "menu" => "category name"
    ]);
});

Route::get('/specials', function () {
    return view('specials',[
        "title" =>  "Specials",
        "description" => "Special gifts"
    ]);
});

Route::get('/myaccount', function () {
    return view('myaccount',[
        "title" =>  "My Account",
        "description" => "My account"
    ]);
});

Route::get('/register2', function () {
    return view('register2',[
        "title" => "Register",
        "description" => "Register"
    ]);
});

Route::get('/details', function () {
    return view('details',[
        "title" => "Details",
        "description" => "Product name",
        "menu" => "Product name"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" =>  "Contact",
        "description" => "Contact Us"
    ]);
});

Route::get('/cart', function () {
    return view('cart', [
        "title" => "Cart",
        "description" => "My cart"
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
