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

Route::get('/', function () {
    return view('user.home');
});


Route::get('/cart', function () {
    return view('user.cart');
});




Route::get('/dashobard', function () {
    return view('admin.dashboard');
});

Route::get('/orders', function () {
    return view('admin.orders');
});

Route::get('/products', function () {
    return view('admin.products');
});

Route::get('/brands', function () {
    return view('admin.brands');
});

Route::get('/categories', function () {
    return view('admin.categories');
});

Route::get('/customers', function () {
    return view('admin.customers');
});
