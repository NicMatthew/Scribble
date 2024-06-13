<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;

use App\Models\Product;
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

// Route::get('/', function () {
//     return view('home');
// })->name("home");

Route::get("/sign-in", [signinController::class, "signin"])->name("sign-in");
Route::post("/sign-in/create", [signinController::class, "createUser"])->name("createUser");
Route::get("/log-in", [signinController::class, "login"])->name("log-in");
Route::post("/log-in", [signinController::class, "authenticate"])->name("authenticate");
Route::post("/log-out", [signinController::class, "logout"])->name("log-out");

Route::get('/profile', [UserController::class, 'showProfile'])->name("profile")->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->middleware('auth')->name("edit-profile");
Route::post('/profile/update', [UserController::class, 'updateProfile'])->middleware('auth')->name('update-profile');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/products/{name}', [ProductController::class, 'showByName'])->name('product-show');

// Route::get('/product-catalog', function () {
//     return view('product-catalog');
// });

Route::get('/product-catalog', [ProductController::class, 'showAllProducts'])->name('product-catalog');
Route::get('/product-catalog/{productID}', [ProductController::class, 'showProductDetail'])->name('product-detail');

Route::get('/addresses/{userId}', [UserController::class, 'showAddresses'])->name('show-addresses');
Route::post('/add/address', [AddressController::class, 'addAddress'])->name('add-address');
Route::delete('/address/{addressId}', [AddressController::class, 'deleteAddress'])->name('delete-address');



Route::get('/product-detail', function () {
    return view('product-detail');
});


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

Route::get('/sidebar', function () {
    return view('/components/sidebar');
});

Route::get('/shipping', function () {
    return view('shipping');
});

// Route::get('/address', function () {
//     return view('address');
// });

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
Route::post('/product-admin/update', [AdminController::class, "product_update"])->name('product_update');

// Route::post('/wishlist/add', [ProductController::class, 'addToWishlist'])->name('wishlist-add');
Route::get('/wishlist', [ProductController::class, 'showWishlist'])->name('wishlist-index');

Route::post('/wishlist-toggle', [ProductController::class, 'toggleWishlist'])->name('wishlist-toggle');
