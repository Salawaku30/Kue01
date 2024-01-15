<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

//Beralih ke file Auth Login dan Register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


//Admin Page
Route::get('/admin', function () {
    $pageTitle = "Admin";
    return view('admin.index', compact('pageTitle'));
})->name('index');

Route::get('/orders', function () {
    $pageTitle = "Orders";
    return view('admin.orders', compact('pageTitle'));
})->name('orders');

Route::get('/product', function () {
    $pageTitle = "Products";
    return view('admin.product', compact('pageTitle'));
})->name('product');

Route::get('/feedback', function () {
    $pageTitle = "Feedback";
    return view('admin.feedback', compact('pageTitle'));
})->name('feedback');


Route::resource('products', ProductController::class);
