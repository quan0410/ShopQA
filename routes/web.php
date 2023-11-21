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
//Route::get('/resources/images/{filename}', function($filename){
//    $path = resource_path() . '/images/' . $filename;
//
//    if(!File::exists($path)) {
//        return response()->json(['message' => 'Image not found.'], 404);
//    }
//
//    $file = File::get($path);
//    $type = File::mimeType($path);
//
//    $response = Response::make($file, 200);
//    $response->header("Content-Type", $type);
//
//    return $response;
//});

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

    Route::middleware(['auth.admin','user'])->prefix('/user')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.user.index');
        Route::get('/create',[\App\Http\Controllers\Admin\UserController::class,'create'])->name('admin.user.create');
        Route::post('/',[\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin.user.store');
        Route::get('/{user}/edit',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.user.edit');
        Route::patch('/{user}',[\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');
        Route::delete('/{user}',[\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin.user.destroy');

    });

    Route::middleware('auth.admin')->prefix('/category')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
        Route::get('{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
    });

    Route::middleware('auth.admin')->prefix('/sale')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SaleController::class, 'index'])->name('admin.sale.index');
        Route::get('create', [\App\Http\Controllers\Admin\SaleController::class, 'create'])->name('admin.sale.create');
        Route::post('/', [\App\Http\Controllers\Admin\SaleController::class, 'store'])->name('admin.sale.store');
        Route::delete('/{sale}', [\App\Http\Controllers\Admin\SaleController::class, 'destroy'])->name('admin.sale.destroy');
        Route::get('{sale}/edit', [\App\Http\Controllers\Admin\SaleController::class, 'edit'])->name('admin.sale.edit');
        Route::put('/{sale}', [\App\Http\Controllers\Admin\SaleController::class, 'update'])->name('admin.sale.update');
    });

    Route::middleware('auth.admin')->prefix('/slider')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('create', [\App\Http\Controllers\Admin\SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('/', [\App\Http\Controllers\Admin\SliderController::class, 'store'])->name('admin.slider.store');
        Route::delete('/{slider}', [\App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('admin.slider.destroy');
        Route::get('{slider}/edit', [\App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::put('/{slider}', [\App\Http\Controllers\Admin\SliderController::class, 'update'])->name('admin.slider.update');
    });

    Route::middleware('auth.admin')->prefix('/product')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.store');
        Route::delete('/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.product.destroy');
    });
});
