<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;

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


// Guest
Auth::routes();
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/produk', [FrontController::class, 'belum'])->name('belum');
Route::get('/produk/{id}', [FrontController::class, 'belum']);

Route::get('/toko', [FrontController::class, 'toko'])->name('toko');
Route::get('/toko/{id}', [FrontController::class, 'showToko']);

Route::get('/blog', [FrontController::class, 'belum'])->name('belum');
Route::get('/aboutus', [FrontController::class, 'belum'])->name('belum');


Route::prefix('home')->middleware('auth')->group(function () {
    // Landing Page
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // Route::get('/storeList', [HomeController::class, 'index'])->name('storeList');
    Route::get('/visit/{id}', [VendorController::class, 'show'])->name('user.visit');

});

Route::group(['middleware'=>'checkRole:user','prefix'=>'user'], function() {
    // Buka Toko
    Route::get('/store', [StoreController::class, 'create'])->name('user.create');
    Route::post('/store', [StoreController::class, 'store'])->name('user.store');
});


Route::group(['middleware'=>'checkRole:vendor','prefix'=>'dashboard/vendor','as'=>'vendor.'], function() {
    Route::get('/', function () {
        return view('dashboard.vendor.index');
    });

    // Produk
    Route::resource('product', ProductController::class);

    // Toko
    Route::get('/store', [StoreController::class, 'index'])->name('store.index');
    Route::get('/store/{id}', [StoreController::class, 'edit'])->name('store.edit');
    Route::put('/store/{id}', [StoreController::class, 'update'])->name('store.update');
    Route::delete('/store/delete/{id}', [StoreController::class, 'destroy'])->name('store.delete');
});
