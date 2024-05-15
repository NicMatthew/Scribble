<?php

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

Route::get('/product-catalog', function () {
    return view('product-catalog');
});

Route::get('/log-in', function () {
    return view('log-in');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/shipping', function () {
    return view('shipping');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/address', function () {
    return view('address');
});



Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about-us', function () {
    return view('about-us');
});
