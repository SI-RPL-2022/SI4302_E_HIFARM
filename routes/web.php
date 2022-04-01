<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function() {
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::post('/product', [App\Http\Controllers\ProductController::class, 'store']);
    Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('/product/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
});
