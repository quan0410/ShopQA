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
Auth::routes();

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, "index"])->name("home");

Route::get('/about_us', function (){
    return view('front.about');
})->name("about");

Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, "index"])->name("contact.index");

Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class, "index"])->name("blog.index");

Route::get('/products/{product:sku}', [\App\Http\Controllers\Front\ProductController::class, "index"])->name("product.index");

Route::get('/shop', [\App\Http\Controllers\Front\ShopController::class, "index"])->name("shop.index");

Route::get('/checkout', [\App\Http\Controllers\Front\CheckOutController::class, "index"])->name("checkout.index");

// CART

Route::get('/cart', [\App\Http\Controllers\Front\CartController::class, "index"])->name("cart.index");

Route::get('/addcart', [\App\Http\Controllers\Front\CartController::class, "add"])->name("add.cart");

Route::get('/updatecart', [\App\Http\Controllers\Front\CartController::class, "updateCart"])->name("update.cart");

Route::get('/removecart', [\App\Http\Controllers\Front\CartController::class, "removeCart"])->name("remove.cart");

//Route::get('/search', [\App\Http\Controllers\Front\ProductController::class, "search"])->name("search.result");

// Load Image
Route::get('/resources/images/{filename}', function($filename){
    $path = resource_path() . '/images/' . $filename;

    if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::prefix('/admin')->group(function () {
    Route::middleware('auth.admin')->get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home.index');

    Route::middleware('guest.admin')->get('/login',[\App\Http\Controllers\Admin\LoginController::class,'index'])->name('admin.login.index');
    Route::middleware('guest.admin')->post('/login',[\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login.login');
    Route::post('/logout',[\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.login.logout');

    Route::middleware('auth.admin')->prefix('/brand')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\BrandsController::class, 'index'])->name('admin.brand.index');
        Route::get('create', [\App\Http\Controllers\Admin\BrandsController::class, 'create'])->name('admin.brand.create');
        Route::post('/', [\App\Http\Controllers\Admin\BrandsController::class, 'store'])->name('admin.brand.store');
        Route::delete('/{brand}', [\App\Http\Controllers\Admin\BrandsController::class, 'destroy'])->name('admin.brand.destroy');
        Route::get('{brand}/edit', [\App\Http\Controllers\Admin\BrandsController::class, 'edit'])->name('admin.brand.edit');
        Route::put('/{brand}', [\App\Http\Controllers\Admin\BrandsController::class, 'update'])->name('admin.brand.update');
    });

    Route::middleware('auth.admin')->prefix('/category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
        Route::get('{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
    });
});
