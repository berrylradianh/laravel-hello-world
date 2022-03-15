<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\SpecialsController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', function () {
    //     return view('posts.welcome', [
        //         "title" =>  "Home",
        //         "description" => "Featured Products"
        //     ]);
        // });

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/category',[CategoryController::class,'index']);
Route::get('/specials',[SpecialsController::class,'index']);
Route::get('/myaccount',[MyAccountController::class,'index']);
Route::get('/details',[DetailsController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/cart',[CartController::class,'index']);

        // Route::get('posts.about', function () {
            //     return view('posts.about', [
                //         "title" =>  "About",
        //         "description" => "About Us"
        //     ]);
        // });


// Route::get('posts.category', function () {
    //     return view('posts.category',[
        //         "title" => "Category",
        //         "description" => "Category Products",
        //         "menu" => "category name"
        //     ]);
        // });


// Route::get('posts.specials', function () {
    //     return view('posts.specials',[
        //         "title" =>  "Specials",
        //         "description" => "Special gifts"
        //     ]);
        // });

// Route::get('posts.myaccount', function () {
//     return view('posts.myaccount',[
//         "title" =>  "My Account",
//         "description" => "My account"
//     ]);
// });

// Route::get('posts.register2', function () {
//     return view('register2',[
//         "title" => "Register",
//         "description" => "Register"
//     ]);
// });

// Route::get('posts.details', function () {
//     return view('posts.details',[
//         "title" => "Details",
//         "description" => "Product name",
//         "menu" => "Product name"
//     ]);
// });

// Route::get('posts.contact', function () {
//     return view('posts.contact',[
//         "title" =>  "Contact",
//         "description" => "Contact Us"
//     ]);
// });

// Route::get('posts.cart', function () {
//     return view('posts.cart', [
//         "title" => "Cart",
//         "description" => "My cart"
//     ]);
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
