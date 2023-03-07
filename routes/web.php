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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/paymentOverview', function () {
    return view('paymentOverview');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/test', function () {
    return view('test');
});

