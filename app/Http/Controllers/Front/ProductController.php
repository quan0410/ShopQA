<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $featured = Product::featured()->get();
        $product->load(["category", "productImage", "sizes" => function($query){
            $query->with('colors');
        }, "reviews"])->loadCount('reviews');
        $rates = Review::where('product_id', $product->id)->pluck('rate')->toArray();
        $averageRate = 0;
        if (count($rates)) {
            $averageRate = (int)round(array_sum($rates) / count($rates));
        }
        return view("front.product" ,compact("product", "featured", "averageRate"));
    }

}
