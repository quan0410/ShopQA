<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Sales;
use App\Models\Slider;
use Faker\Core\DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where("is_show", true)->get();
        $sale = Sales::where("is_show", true)->with('products')->first();
        $bestSellers = Product::bestSellers();
        $hotSales = Product::hotSales();
        $newProduct = Product::new()->get();
        $featured = Product::featured()->get();
        $blogs = Blog::orderBy('id', 'DESC')->get();;
        return view('front.index', compact("bestSellers", "hotSales", "newProduct" , "featured", "sliders", "sale", "blogs"));
    }
}
