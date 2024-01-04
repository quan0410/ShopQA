<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $product = new Product();
        $products = $product->Search($request);
        if (request('category')) {
            $q->where('price', '>', request('price_from'));
        }
        if (request('color')) {
            $q->where('color', '>', request('color'));
        }
        $sizes = array_unique(array_column(Size::get()->toArray(), 'name'));
        $colors = Color::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view("front.shop", compact("products", "categories", "brands", "sizes", "colors"));
    }
}
