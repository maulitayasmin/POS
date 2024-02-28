<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/category', [ProductsController::class, 'product'])->name('product');
    Route::get('/category/food', [ProductsController::class, 'food']);
    Route::get('/category/beauty', [ProductsController::class, 'beauty']);
    Route::get('/category/baby', [ProductsController::class, 'babykid']);
    Route::get('/category/homecare', [ProductsController::class, 'homecare']);
});

Route::get('/profil/{id}/name/{name}', [ProfilController::class, 'index']);

Route::get('/transaksi', [TransaksiController::class, 'index']);