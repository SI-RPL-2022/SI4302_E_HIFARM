<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;

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


// Route::prefix('vendor')->middleware('auth', 'checkRole:vendor')->group(function () {
Route::group(['middleware'=>'checkRole:vendor','prefix'=>'vendor'], function() {
    // TOKO
    // Route::get('/store', [VendorController::class, 'index'])->name('vendor.store');
    // Route::post('/store', [VendorController::class, 'store'])->name('vendor.create');
    // Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
    // Route::delete('/delete/{id}', [VendorController::class, 'delete'])->name('vendor.delete');

    // PRODUK
    Route::group(['prefix'=>'product'], function() {
        Route::get('/', [ProductController::class, 'index'])->name('vendor.product.index');
        Route::post('/', [ProductController::class, 'store']);
        Route::get('/create', [ProductController::class, 'create'])->name('vendor.product.create');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('vendor.product.edit');
        Route::post('/edit/{product}', [ProductController::class, 'update']);
        Route::get('/show/{product}', [ProductController::class, 'show']);
        Route::delete('/{product}', [ProductController::class, 'destroy']);
    });

});
