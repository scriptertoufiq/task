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

// front end route

// shop /index page
Route::get('/', [App\Http\Controllers\frontend\HomePageController::class, 'index'])->name('index');

Route::POST('/fetch_product_details', [App\Http\Controllers\frontend\HomePageController::class, 'fetch_product_details'])->name('fetch_product_details');
// add to cart page
Route::POST('/cart/store', [App\Http\Controllers\frontend\CartController::class, 'store'])->name('add_to_cart');
// remove from to cart 
Route::get('cart/delete/{id}', [App\Http\Controllers\frontend\CartController::class, 'destroy']);
// cart page
Route::get('/cart', [App\Http\Controllers\frontend\HomePageController::class, 'Cart']);
// product search
// shop search page
Route::get('/shop/search/', [App\Http\Controllers\frontend\HomePageController::class, 'product_search'])->name('product_search');

// shop category search page
Route::get('/shop/category/', [App\Http\Controllers\frontend\HomePageController::class, 'shop_category'])->name('shop_category');





// admin section route
Auth::routes();
// admin dashboard route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin',], function () {

    //============= shop  page product category section ============//
    Route::get('category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
    Route::get('category/create', [App\Http\Controllers\admin\CategoryController::class, 'create']);
    Route::post('category/store', [App\Http\Controllers\admin\CategoryController::class, 'store']);
    Route::get('category/edit/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit']);
    Route::post('category/update/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update']);
    Route::get('category/delete/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);

    //============= shop  page product section ============//
    Route::get('shop', [App\Http\Controllers\admin\ShopController::class, 'index']);
    Route::get('shop/create', [App\Http\Controllers\admin\ShopController::class, 'create']);
    Route::post('shop/store', [App\Http\Controllers\admin\ShopController::class, 'store']);
    Route::get('shop/edit/{id}', [App\Http\Controllers\admin\ShopController::class, 'edit']);
    Route::post('shop/update/{id}', [App\Http\Controllers\admin\ShopController::class, 'update']);
    Route::get('shop/delete/{id}', [App\Http\Controllers\admin\ShopController::class, 'destroy']);
});
