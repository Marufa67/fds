<?php

use App\Http\Controllers\backend\ShopController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\DeliveryManController;
use App\Http\Controllers\frontend\WebController;
use App\Http\Controllers\backend\OrderDeliveryManController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\WebProcessor;

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/do-login', [UserController::class, 'doLogin'])->name('do.login');

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/', [Dashboard::class, "list"])->name('dashboard');
  

    Route::get('/shop', [ShopController::class, 'List'])->name('shop');
    Route::get('/shop/create', [ShopController::class, 'create'])->name("shop.create");
    Route::post('/shop/create/submit', [ShopController::class, 'post'])->name("shop.submit");


    Route::get('/orders', [OrderController::class, 'list'])->name('orders.list');
    Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
    Route::post('/order/create/submit',[OrderController::class,'post'])->name('order.submit');
    Route::get('/order/delete/{order_id}',[OrderController::class,'deleteOrder'])->name('admin.order.delete');
    Route::get('/order/view/{order_id}',[OrderController::class,'viewOrder'])->name('admin.order.view');
    Route::get('/order/edit/{order_id}',[OrderController::class,'edit'])->name('order.edit');
    Route::put('/order/update/{order_id}',[OrderController::class,'update'])->name('order.update');

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


    Route::get('/delivery_man', [DeliveryManController::class, 'list'])->name('delivery_man.list');
    Route::get('/delivery_man/create',[DeliveryManController::class,'create'])->name('delivery_man.create');
    Route::post('/delivery_man/create/submit',[DeliveryManController::class,'post'])->name('delivery_man.submit');

    Route::get('/delivery_man/delete/{delivery_man_id}',[DeliveryManController::class,'deleteDelivery_man'])->name('admin.delivery_man.delete');
    Route::get('/delivery_man/view/{delivery_man_id}',[DeliveryManController::class,'viewDelivery_man'])->name('admin.delivery_man.view');
    Route::get('/delivery_man/update-order-status/{order_id}',[DeliveryManController::class,'viewDeliveryUpdateOrderStatus'])->name('admin.viewDeliveryUpdateOrderStatus');

    Route::get('/delivery_man/edit/{delivery_man_id}',[DeliveryManController::class,'edit'])->name('delivery_man.edit');
    Route::put('/delivery_man/update/{delivery_man_id}',[DeliveryManController::class,'update'])->name('delivery_man.update');


    
    Route::get('/order_delivery_man', [OrderDeliveryManController::class, 'list'])->name('order_delivery_man.list');
    Route::get('/order_delivery_man/create', [OrderDeliveryManController::class, 'create'])->name('order_delivery_man.create');
    Route::post('/order_delivery_man/create/submit',[OrderDeliveryManController::class,'post'])->name('order_delivery_man.submit');




    Route::get('/category/delete/{category_id}',[CategoryController::class,'deleteCategory'])->name('admin.category.delete');
    Route::get('/category/view/{category_id}',[CategoryController::class,'viewCategory'])->name('admin.category.view');




    Route::get('/shop/delete/{shop_id}',[ShopController::class,'deleteShop'])->name('admin.shop.delete');
    Route::get('/shop/view/{shop_id}',[ShopController::class,'viewShop'])->name('admin.shop.view');






    Route::get('/customer/delete/{customer_id}',[CustomerController::class,'deleteCustomer'])->name('admin.customer.delete');
    Route::get('/customer/view/{customer_id}',[CustomerController::class,'viewCustomer'])->name('admin.customer.view');



   

    
    
});
//for website
Route::get('/',[WebController::class,'home'])->name('home');
Route::post('/registration',[WebController::class,'register'])->name('register');
Route::post('/login', [WebController::class, 'login'])->name('user.login');
Route::get('/logout', [WebController::class, 'logout'])->name('user.logout');
Route::post('/shop/registration',[WebController::class,'registration'])->name('shop.registration');

Route::get('/profile',[WebController::class,'profile'])->name('user.profile');
Route::put('/profile/update',[WebController::class,'updateProfile'])->name('profile.update');


 