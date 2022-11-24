<?php

use App\Http\Controllers\backend\ShopController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/do-login', [UserController::class, 'doLogin'])->name('do.login');

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/', [Dashboard::class, "list"])->name('dashboard');

    Route::get('/shop', [ShopController::class, 'List'])->name('shop');
    Route::get('/shop/create', [ShopController::class, 'create'])->name("shop.create");

    Route::get('/orders', [OrderController::class, 'orders_list'])->name('orders.list');

    Route::get('/payment', [PaymentController::class, 'payment_list'])->name('payment.list');

    Route::get('/customer', [CustomerController::class, 'List'])->name('customer');
    Route::get('/customer/create', [CustomerController::class, "create"])->name("customer.create");
    Route::post('/customer/create/submit', [CustomerController::class, 'post'])->name("customer.submit");

    Route::get('/product', [ProductController::class, 'list'])->name('product.list');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/categories', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

    Route::get('/product/delete/{product_id}',[ProductController::class,'deleteProduct'])->name('admin.product.delete');
    Route::get('/product/view/{product_id}',[ProductController::class,'viewProduct'])->name('admin.product.view');
    
    Route::get('/product/edit/{product_id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{product_id}',[ProductController::class,'update'])->name('product.update');
    
    
});
//for website
Route::get('/',[WebController::class,'home'])->name('home');
Route::post('/registration',[WebController::class,'register'])->name('register');
Route::post('/login', [WebController::class, 'login'])->name('user.login');
Route::get('/logout', [WebController::class, 'logout'])->name('user.logout');