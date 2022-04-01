<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

////////////////////////// Landing Page
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('home')->middleware('auth')->group(function () {
    ////////////////////////// LANDING PAGE
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/storeList', [HomeController::class, 'index'])->name('storeList');

});


Route::prefix('vendor')->middleware('auth', 'checkRole:vendor')->group(function () {
//     /////////////////////// TOKO
    Route::get('/store', [VendorController::class, 'index'])->name('vendor.store');
//     // Route::post('/store', [VendorController::class, 'store'])->name('vendor.create');
//     // Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
//     // Route::delete('/delete/{id}', [VendorController::class, 'delete'])->name('vendor.delete');

//     /////////////////////// PRODUK
//     // Route::get('/product/{id}', [ProductController::class, 'index'])->name('vendor.product');
//     // Route::post('/product/add/{id}', [ProductController::class, 'store'])->name('vendor.addProduct');
//     // Route::put('/product/{id}', [ProductController::class, 'update'])->name('vendor.updateProduct');
//     // Route::put('/product/delete/{id}', [ProductController::class, 'delete'])->name('vendor.deleteProduct');

});