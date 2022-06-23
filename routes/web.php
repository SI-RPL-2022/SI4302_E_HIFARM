<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Forum_ThreadController;
use App\Http\Controllers\Forum_CommentController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Vendor\ProductController;
use App\Http\Controllers\Vendor\JournalController;
use App\Http\Controllers\Vendor\BlogController;

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

Auth::routes();

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/toko', [FrontController::class, 'toko'])->name('toko.index');
Route::get('/toko/{id}', [FrontController::class, 'tokoShow'])->name('toko.show');
Route::get('/produk', [FrontController::class, 'product'])->name('produk');
Route::get('/forum', [FrontController::class, 'forum'])->name('forum');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog.index');
Route::get('/blog/{id}', [FrontController::class, 'blogShow'])->name('blog.show');

Route::get('/tes', [FrontController::class, 'tes'])->name('tes');


// Thread
Route::prefix('thread')->group(function () {
    Route::middleware('auth')->group(function () {
    Route::get('/create', [Forum_ThreadController::class, 'create'])->name('thread.create');
    Route::post('/create', [Forum_ThreadController::class, 'store'])->name('thread.store');
    Route::get('/edit/{id}', [Forum_ThreadController::class, 'edit'])->name('thread.edit');
    Route::put('/update/{id}', [Forum_ThreadController::class, 'update'])->name('thread.update');
    Route::delete('/delete/{id}', [Forum_ThreadController::class, 'destroy'])->name('thread.delete');
    });
    Route::get('/show/{id}', [Forum_ThreadController::class, 'show'])->name('thread.show');
    
    

    Route::prefix('comment')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/create/{id}', [Forum_CommentController::class, 'create'])->name('thread.comment.create');              ///id of thread's
        Route::post('/create', [Forum_CommentController::class, 'store'])->name('thread.comment.store');

        Route::get('/edit/{id}', [Forum_CommentController::class, 'edit'])->name('thread.comment.edit');                           ///id of comment's
        Route::put('/edit/{id}', [Forum_CommentController::class, 'update'])->name('thread.comment.update');   
        Route::delete('/delete/{id}', [Forum_CommentController::class, 'destroy'])->name('thread.comment.delete'); 
        });
                   
        });

});


Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/visit/{id}', [VendorController::class, 'show'])->name('user.visit');

    //////////////////// PEMBELIAN
    Route::get('/produk/{id}', [ProductController::class, 'show2'])->name('product.show');
    Route::get('/produk/{id}/whatsapp', [ProductController::class, 'whatsapp'])->name('product.whatsapp');

    //////////////////// Review
    Route::get('/review/{id}', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/{id}/store', [ReviewController::class, 'store'])->name('review.store');
    Route::delete('/review/{id}/delete', [ReviewController::class, 'destroy'])->name('review.delete');

});

Route::group(['middleware'=>'checkRole:user,vendor'], function() {
    // GET BUKA TOKO
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');   
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');   
    Route::post('/profile/edit', [ProfileController::class, 'update']);
});

Route::group(['middleware'=>'checkRole:user','prefix'=>'user'], function() {
    // GET BUKA TOKO
    Route::get('/store', [VendorController::class, 'create'])->name('user.create');
    Route::post('/store', [VendorController::class, 'store'])->name('user.store');
});

Route::group(['middleware'=>'checkRole:admin','prefix'=>'admin'], function() {
    Route::get('/request', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/request/show/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::post('/request/accept/{id}', [AdminController::class, 'Accept'])->name('admin.acc');
    Route::post('/request/deny/{id}', [AdminController::class, 'Deny'])->name('admin.deny');
});

/////VENDOR
Route::group(['middleware'=>'checkRole:vendor','prefix'=>'dashboard/vendor'], function() {
    // Toko
    Route::get('/store', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/store/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
    Route::delete('/store/delete/{id}', [VendorController::class, 'destroy'])->name('vendor.delete');

    // Produk
    Route::group(['prefix'=>'product'], function() {
        Route::get('/', [ProductController::class, 'index'])->name('vendor.product.index');
        Route::post('/', [ProductController::class, 'store']);
        Route::get('/create', [ProductController::class, 'create'])->name('vendor.product.create');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('vendor.product.edit');
        Route::post('/edit/{product}', [ProductController::class, 'update'])->name('vendor.product.update');
        Route::get('/show/{product}', [ProductController::class, 'show']);
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('vendor.product.destroy');
    });

    // Journal
    Route::group(['prefix'=>'journal'], function() {
        Route::get('/', [JournalController::class, 'index'])->name('vendor.journal.index');
        Route::post('/', [JournalController::class, 'store']);
        Route::post('/edit/{id}', [JournalController::class, 'update'])->name('vendor.journal.update');
        Route::delete('/{id}', [JournalController::class, 'destroy'])->name('vendor.journal.destroy');
    });

    // Blog
    Route::group(['prefix'=>'blog'], function() {
        Route::get('/', [BlogController::class, 'index'])->name('vendor.blog.index');
        Route::post('/', [BlogController::class, 'store']);
        Route::get('/create', [BlogController::class, 'create'])->name('vendor.blog.create');
        Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('vendor.blog.edit');
        Route::post('/edit/{blog}', [BlogController::class, 'update']);
        Route::get('/show/{blog}', [BlogController::class, 'show']);
        Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('vendor.blog.destroy');
    });

});
