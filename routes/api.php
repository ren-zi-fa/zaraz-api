<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/register', RegisterController::class);
Route::post('/login', LoginController::class);
Route::post('/logout', LogoutController::class);

Route::get('/user', [UserController::class, 'index']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/create-product', [ProductController::class, 'store']);
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/show-product/{product_id}', 'show');
    Route::get('/product', 'index');
});
