<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Forum_ThreadController;
use App\Http\Controllers\Forum_CommentController;

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


// Route::get('/blog', function () {
//     return view('kumpulanblog', [
//         'data' => App\Models\Blog::latest('updated_at')->filter(request(['search']))->paginate(10)
//     ]);
// });

// Route::get('/blog/{id}', function ($id) {
//     return view('showblog', [
//         'data' => App\Models\Blog::where('id', $id)->first()
//     ]);
// });

Auth::routes();
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/toko', [FrontController::class, 'toko'])->name('toko');
Route::get('/visit/{id}', [VendorController::class, 'show'])->name('visit');
Route::get('/forum', [FrontController::class, 'forum'])->name('forum');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'showblog'])->name('blog.visit');

Route::get('/tes', [FrontController::class, 'tes'])->name('tes');


    /// THREAD
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
////////////////////////////////////////GUEST & ALL USER



/////////////////////////////////////////SPECIFIC USER

Route::prefix('home')->middleware('auth')->group(function () {
    ////////////////////////// LANDING PAGE
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/storeList', [HomeController::class, 'index'])->name('storeList');
    Route::get('/visit/{id}', [VendorController::class, 'show'])->name('user.visit');

    //////////////////// PEMBELIAN
    Route::get('/produk/{id}', [ProductController::class, 'show2'])->name('product.show');
    Route::get('/produk/{id}/whatsapp', [ProductController::class, 'whatsapp'])->name('product.whatsapp');

    //////////////////// Review
    Route::get('/review/{id}', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/{id}/store', [ReviewController::class, 'store'])->name('review.store');
    Route::delete('/review/{id}/delete', [ReviewController::class, 'destroy'])->name('review.delete');

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
Route::group(['middleware'=>'checkRole:vendor','prefix'=>'vendor'], function() {
    // TOKO
    
    Route::get('/store', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/store/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/store/{id}', [VendorController::class, 'update'])->name('vendor.update');
    Route::delete('/store/delete/{id}', [VendorController::class, 'destroy'])->name('vendor.delete');

    // Blog
    Route::group(['prefix'=>'blog'], function() {
        Route::get('/', [BlogController::class, 'index'])->name('vendor.blog.index');
        Route::post('/', [BlogController::class, 'store']);
        Route::get('/create', [BlogController::class, 'create'])->name('vendor.blog.create');
        Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('vendor.blog.edit');
        Route::post('/edit/{blog}', [BlogController::class, 'update']);
        Route::get('/show/{blog}', [BlogController::class, 'show']);
        Route::delete('/{blog}', [BlogController::class, 'destroy']);
    });

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

//////////////////////////////////////// SPECIFIC USER
