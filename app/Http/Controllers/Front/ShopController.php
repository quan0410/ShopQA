<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $product = new Product();
        $products = $product->Search($request);
        $sizes = array_unique(array_column(ProductDetail::get()->toArray(), 'size'));
        $colors = array_unique(array_column(ProductDetail::get()->toArray(), 'color'));
        $categories = Category::all();
        $brands = Brand::all();
        return view("front.shop", compact("products", "categories", "brands", "sizes", "colors"));
    }
}
