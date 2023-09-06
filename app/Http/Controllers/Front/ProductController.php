<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $featured = Product::featured()->get();
        $product->load("category", "productImage", "productDetails", "review");
        return view("front.product" ,compact("product", "featured"));
    }
}
