<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TransactionListController;
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

Route::get("/sign-in", [SigninController::class, "signin"])->name("sign-in");
Route::post("/sign-in/create", [SigninController::class, "createUser"])->name("createUser");
Route::get("/log-in", [SigninController::class, "login"])->name("log-in");
Route::post("/log-in", [SigninController::class, "authenticate"])->name("authenticate");
Route::post("/log-out", [SigninController::class, "logout"])->name("log-out");

Route::middleware(['user'])->group(function () {

    Route::get('/profile', [UserController::class, 'showProfile'])->name("profile")->middleware('auth');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->middleware('auth')->name("edit-profile")->middleware('auth');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->middleware('auth')->name('update-profile')->middleware('auth');
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/transaction-list',[TransactionListController::class,'index'])->name('transaction-list')->middleware('auth');
    Route::get('/transaction-list/delete',[TransactionListController::class,'transaction_delete'])->name('transaction-delete')->middleware('auth');
    Route::get('/transaction-list/review',[TransactionListController::class,'transaction_review'])->name('transaction-review')->middleware('auth');
    Route::post('/transaction-list/review/add',[TransactionListController::class,'transaction_review_add'])->name('transaction-review-add')->middleware('auth');

    Route::get('/product-catalog', [ProductController::class, 'showAllProducts'])->name('product-catalog');
    Route::get('/product-catalog/{productID}', [ProductController::class, 'showProductDetail'])->name('product-detail');

    Route::post("/addresses/find", [AddressController::class, "findAddress"])->name("find-address")->middleware('auth');
    Route::get('/addresses/{userId}', [UserController::class, 'showAddresses'])->name('show-addresses')->middleware('auth');
    Route::post('/add/address', [AddressController::class, 'addAddress'])->name('add-address')->middleware('auth');
    Route::delete('/address', [AddressController::class, 'deleteAddress'])->name('delete-address')->middleware('auth');
    Route::post('/editAddress', [AddressController::class, 'editAddress'])->name('edit-address')->middleware('auth');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
    Route::put('/cart/{product_id}/{variant_id}/{user_id}', [CartController::class, 'update'])->name('cart.update')->middleware('auth');

    Route::get('/shipping', [ShippingController::class, "index"])->name('shipping.index')->middleware('auth');
    Route::get('/buy-now', [ShippingController::class, 'buyNow'])->name('buy.now')->middleware('auth');

    Route::get('/payment-qr', [PaymentController::class, "qr"])->name("payment")->middleware('auth');
    Route::post('/payment/successful', [PaymentController::class, "paymentSuccess"])->name("paymentSuccess")->middleware('auth');

    Route::get('/wishlist', [ProductController::class, 'showWishlist'])->name('wishlist-index')->middleware('auth');

    Route::post('/wishlist-toggle', [ProductController::class, 'toggleWishlist'])->name('wishlist-toggle')->middleware('auth');

    Route::post("/make-order", [PaymentController::class, "makeOrder"])->name("make-order")->middleware('auth');
    Route::get("/orders/{transactionID}/retry-payment", [PaymentController::class, 'retryPayment'])->name('retry-payment')->middleware('auth');

    Route::get('/terms', function () {
        return view('terms');
    });
    
    Route::get('/about-us', function () {
        return view('about-us');
    });
    
    
    Route::get('/faq', function () {
        return view('faq');
    });

});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/order-admin', [OrderAdminController::class, 'index']);
    Route::post('/order-admin/update/{id}', [OrderAdminController::class, 'updateStatus'])->name("order-admin-update");

    // Product Admin Routing
    Route::get("/product-admin", [AdminController::class, "product_admin"])->name("product_admin");
    Route::get("/product-admin/find", [AdminController::class, "product_find"])->name("product-find");
    Route::post("/product-admin/edit", [AdminController::class, "product_edit"])->name("product-edit");
    Route::post("/product-admin", [AdminController::class, "product_add"])->name("product_add");
    Route::post('/product-admin/update', [AdminController::class, "product_update"])->name('product_update');
    Route::get('/product-admin/delete', [AdminController::class, "product_delete"])->name('product_delete');

    // Dashboard Admin Routing
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name("admin-dashboard");
    Route::get('/dashboard/discount/add', [AdminController::class, "addDiscount"])->name("add-discount");
    Route::get('/dashboard/discount/delete', [AdminController::class, "deleteDiscount"])->name("delete-discount");
    Route::post('/dashboard/banner/store', [AdminController::class, "storeBanner"])->name("admin-store-banner");
    Route::get('/dashboard/banner/delete/{id}', [AdminController::class, "removeBanner"])->name("admin-remove-banner");
});