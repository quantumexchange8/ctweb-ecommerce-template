<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/index-2', function () {
    return view('index-2');
});

Route::get('/index-3', function () {
    return view('index-3');
});

Route::get('/index-4', function () {
    return view('index-4');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product-details-config', function () {
    return view('product-details-config');
});

Route::get('/product-details-download', function () {
    return view('product-details-download');
});

Route::get('/product-details-group', function () {
    return view('product-details-group');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});