<?php

use App\Http\Controllers\signinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get("/sign-in", [signinController::class, "signin"])->name("sign-in");
Route::post("/sign-in/create", [signinController::class, "createUser"])->name("createUser");
Route::get("/log-in", [signinController::class, "login"])->name("log-in");
Route::post("/log-in", [signinController::class, "authenticate"])->name("authenticate");

Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->middleware('auth')->name("edit-profile");

Route::get('/product-catalog', function () {
    return view('product-catalog');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/sidebar', function () {
    return view('/components/sidebar');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/address', function () {
    return view('address');
});

Route::get('/payment-qr', function () {
    return view('payment-qr');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/transaction-list', function () {
    return view('transaction-list');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/review', function () {
    return view('review');
});
Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/product-admin', function () {
    return view('/admin/product-admin');
});

Route::get('/order-admin', function () {
    return view('/admin/order-admin');
});
