<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

use Illuminate\Support\Facades\Auth;

Auth::routes();

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Your protected routes go here
    // For example:
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
   
    
 
});

Route::get('/', [LoginController::class, 'index']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/forgetpassword', [LoginController::class, 'forgetpassword'])->name('forgetpassword');
Route::post('/updatepass', [RegisterController::class, 'updatepass'])->name('password.update');
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/profile-page', [UserController::class, 'profile']);
Route::post('/userprofile/store', [UserController::class, 'userprofile'])->name('userprofile.store');
Route::get('/update-profile', [UserController::class, 'updateprofile']);
Route::get('/home-page', [UserController::class, 'homepage']);
// Public Routes

Route::get('/about-page', [UserController::class, 'index']);
Route::get('/buy-page-one/{id}', [UserController::class, 'buypageone']);
Route::get('/buy-page-two/{id}', [UserController::class, 'buypagetwo']);
Route::get('/createprofile', [AdminController::class, 'index']);
Route::post("/createprofiles", [AdminController::class, 'store']);
Route::get('/updateprofile', [AdminController::class, 'updatepage']);
Route::post('/updates', [AdminController::class, 'update']);
Route::get('/profileshow', [AdminController::class, 'show']);
Route::get('/customers', [AdminController::class, 'customer'])->name('users.index');
Route::get('/aboutrating', [AdminController::class, 'viewrate']);
Route::post('/ratings', [AdminController::class, 'aboutrating'])->name('ratings.store');
Route::put('/aboutratingmanuval/{id}', [AdminController::class, 'aboutratingmanuval'])->name('aboutratingmanuval.update');
Route::get('/get-user', [AdminController::class, 'GetUserData']);
Route::get('/productone', [AdminController::class, 'productone']);
Route::post('/addproductone', [AdminController::class, 'productonestore']);
Route::get('/producttwo', [AdminController::class, 'producttwo']);
Route::post('/addproducttwo', [AdminController::class, 'producttwostore']);
Route::get('/category', [AdminController::class, 'category']);
Route::delete('/delete/product/{id}', [AdminController::class, 'deleteProduct'])->name('delete.product');
Route::delete('/delete/products/{id}', [AdminController::class, 'deleteProducts'])->name('delete.products');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/allproduct', [UserController::class, 'allproduct']);
Route::post('/remove-from-cart/{productId}', [UserController::class, 'removeFromCart'])->name('remove-from-cart');

// routes/web.php
Route::post('/cart', [UserController::class, 'addToCart']);
Route::get('/chartview', [UserController::class, 'chartview']);

///order
Route::get('/order', [OrderController::class, 'index']);
Route::post('/update-order-status/{orderId}', [OrderController::class, 'updateStatus']);
Route::post('/store-order', [OrderController::class, 'store'])->name('store.order');


//order-dashboard

Route::get('/orderdashboard', [OrderController::class, 'orderdashboard']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');