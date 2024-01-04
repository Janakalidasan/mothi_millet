<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('admin.dashboard');
});

Route::get('/createprofile', [AdminController::class, 'index']);

Route::post("/createprofiles", [AdminController::class,'store']);

Route::get('/updateprofile', [AdminController::class, 'updatepage']);
Route::post('/updates', [AdminController::class, 'update']);

Route::get('/profileshow', [AdminController::class, 'show']);

