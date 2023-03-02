<?php

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
});
Route::get('/', function () {
    return view('login');
});
Route::get('/', function () {
    return view('register');
});
Route::get('/', function () {
    return view('paymentoverview');
});
Route::get('/', function () {
    return view('payment');
});
Route::get('/', function () {
    return view('courses');
});
Route::get('/', function () {
    return view('product');
});
Route::get('/', function () {
    return view('profile');
});
Route::get('/', function () {
    return view('create');
});
Route::get('/', function () {
    return view('about');
});
Route::get('/', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('faq');
});


