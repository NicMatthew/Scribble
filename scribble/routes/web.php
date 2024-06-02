<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\UserController;
<<<<<<< Updated upstream
use App\Http\Controllers\ProductController;

=======
use App\Models\Product;
>>>>>>> Stashed changes
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
})->name("home");

Route::get("/sign-in", [signinController::class, "signin"])->name("sign-in");
Route::post("/sign-in/create", [signinController::class, "createUser"])->name("createUser");
Route::get("/log-in", [signinController::class, "login"])->name("log-in");
Route::post("/log-in", [signinController::class, "authenticate"])->name("authenticate");
Route::post("/log-out", [signinController::class, "logout"])->name("log-out");

Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->middleware('auth')->name("edit-profile");
Route::post('/profile/update', [UserController::class, 'updateProfile'])->middleware('auth')->name('update-profile');
Route::get('/product-catalog', [ProductController::class, 'searchProducts'])->name('search-products');
// Route::get('/products/{name}', [ProductController::class, 'showByName'])->name('product-show'); 

<<<<<<< Updated upstream
// Route::get('/product-catalog', function () {
//     return view('product-catalog');
// });
=======

Route::get("/product-catalog", [ProductController::class, "product_catalog"])->name("product_catalog");

>>>>>>> Stashed changes

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
Route::get('/order-admin', function () {
    return view('/admin/order-admin');
});


Route::get("/product-admin", [AdminController::class, "product_admin"])->name("product_admin");
Route::post("/product-admin", [AdminController::class, "product_add"])->name("product_add");
