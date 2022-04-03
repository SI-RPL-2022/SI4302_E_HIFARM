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

Route::group(['middleware'=>'checkRole:user','prefix'=>'user'], function() {
    // BUKA TOKO
    Route::get('/store', [VendorController::class, 'create'])->name('user.create');
    Route::post('/store', [VendorController::class, 'store'])->name('user.store');


});


// Route::prefix('vendor')->middleware('auth', 'checkRole:vendor')->group(function () {
Route::group(['middleware'=>'checkRole:vendor','prefix'=>'vendor'], function() {
    // TOKO
    Route::get('/store', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/store/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
    // Route::delete('/delete/{id}', [VendorController::class, 'delete'])->name('vendor.delete');

    // PRODUK
    Route::get('/product', [ProductController::class, 'index'])->name('vendor.product.index');
    Route::post('/product', [ProductController::class, 'store']);
    Route::get('/product/add', [ProductController::class, 'create'])->name('vendor.product.create');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('vendor.product.edit');
    Route::post('/product/edit/{id}', [ProductController::class, 'update']);
    Route::delete('/product/{id}', [ProductController::class, 'destroy']);

});
Route::get('/deskripsitoko',function () {
    return view('deskripsitoko');
});