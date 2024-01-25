<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


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

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

//dashboard

Route::get('/dashboard', [AdminController::class, 'dashboard']);

//login
Route::get('/', [LoginController::class, 'index']);


Route::get('/signup', [LoginController::class, 'signup']);

//Home
Route::get('/home-page', [UserController::class,'homepage']);
//about
Route::get('/about-page', [UserController::class,'index']);
//profile
Route::get('/profile-page', [UserController::class,'profile']);

//update
Route::get('/update-profile', [UserController::class,'updateprofile']);

//buy
Route::get('/buy-page', [UserController::class,'buypage']);


// Route::get('/', [AdminController::class, 'dashboard']);

Route::get('/createprofile', [AdminController::class, 'index']);

Route::post("/createprofiles", [AdminController::class,'store']);

Route::get('/updateprofile', [AdminController::class, 'updatepage']);
Route::post('/updates', [AdminController::class, 'update']);

Route::get('/profileshow', [AdminController::class, 'show']);

Route::get('/customers', [AdminController::class, 'customer'])->name('users.index');


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