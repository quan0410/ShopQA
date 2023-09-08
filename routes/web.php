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

//Route::get('/', function (\App\Service\Product\ProductServicesInterface $productServicesInterface) {
//    return $productServicesInterface->find(1);
//});

Route::get('/about_us', function (){
    return view('front.about');
})->name("about");

Route::get('/contact', [\App\Http\Controllers\Front\ContactController::class, "index"])->name("contact.index");

Route::get('/blog', [\App\Http\Controllers\Front\BlogController::class, "index"])->name("blog.index");

Route::get('/products/{product:sku}', [\App\Http\Controllers\Front\ProductController::class, "index"])->name("product.index");

//Route::get('/shop}', [\App\Http\Controllers\Front\ShopController::class, "index"])->name("shop.index");

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
