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
    return view('welcome');
});

Route::get('/brands', function () {
    return view('brands');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/category_item', function () {
    return view('category_item');
});

Route::get('/brands', function () {
    return view('brands');
});

Route::get('/brand_item', function () {
    return view('brand_item');
});

Route::get('/clients', function () {
    return view('client');
});

Route::get('/client_item', function () {
    return view('client_item');
});

Route::get('/items', function () {
    return view('items');
});

Route::get('/item_properties', function () {
    return view('item_properties');
});







