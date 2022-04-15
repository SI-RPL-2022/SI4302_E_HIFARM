<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
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


//GUEST
Auth::routes();
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/toko', [FrontController::class, 'toko'])->name('toko');
Route::get('/visit/{id}', [VendorController::class, 'show'])->name('visit');


Route::prefix('home')->middleware('auth')->group(function () {
    // LANDING PAGE
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/storeList', [HomeController::class, 'index'])->name('storeList');
    Route::get('/visit/{id}', [VendorController::class, 'show'])->name('user.visit');

});

Route::group(['middleware'=>'checkRole:user','prefix'=>'user'], function() {
    // GET BUKA TOKO
    Route::get('/store', [VendorController::class, 'create'])->name('user.create');
    Route::post('/store', [VendorController::class, 'store'])->name('user.store');
});


Route::group(['middleware'=>'checkRole:vendor','prefix'=>'vendor'], function() {
    // TOKO
    Route::get('/store', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/store/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
    Route::delete('/store/delete/{id}', [VendorController::class, 'destroy'])->name('vendor.delete');

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
