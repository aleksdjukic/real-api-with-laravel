<?php

use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Transaction\TransactionController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//USERS
Route::resource('users', UserController::class)->except(['create', 'edit']);
//CATEGORIES
Route::resource('categories', CategoryController::class)->except(['create', 'edit']);
//BUYERS
Route::resource('buyers', BuyerController::class)->only(['index', 'show']);
//SELLERS
Route::resource('buyers', SellerController::class)->only(['index', 'show']);
//PRODUCTS
Route::resource('buyers', ProductController::class)->only(['index', 'show']);
//TRANSACTION
Route::resource('transactions', TransactionController::class)->only(['index', 'show']);


