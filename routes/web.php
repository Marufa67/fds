<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get("/",[Dashboard::class, "list"]);
Route::get('/shop', [ShopController::class, 'List']);
Route::get('/shop/create',[ShopController::class,'create'])->name("shop.create");

Route::get('/order',[OrderController::class,'list']);
Route::get('/order/create',[OrderController::class,'create'])->name("order.create");
Route::post('/order/create/submit',[OrderController::class,'post'])->name("order.create.submit");

Route::get('/customer',[CustomerController::class,'List']);
Route::get('/customer/create',[CustomerController::class,"create"])->name("customer.create");
Route::post('/customer/create/submit',[CustomerController::class,'post'])->name("customer.submit");


Route::get('/product',[ProductController::class,'List'])->name('product');
Route::get("/product/create",[ProductController::class, "create"])->name("product.create");
Route::post('/product/store',[ProductController::class,"store"])->name("product.store");

Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'createForm']);
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');



















?>