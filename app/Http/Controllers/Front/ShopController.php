<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $products = $this->Search($request);
        $sizes = array_unique(array_column(Size::get()->toArray(), 'name'));
        $colors = Color::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view("front.shop", compact("products", "categories", "brands", "sizes", "colors"));
    }

    public function Search($request)
    {
        $search = $request->search ?? '';
        $size = $request->size ?? '';
        $color = $request->search ?? '';
        $max = $request->max ?? '';
        $min = $request->min ?? '';
        $category = $request->ct ?? '';
        $brand = $request->brand ?? '';
        $sort = $request->sort ?? 'featured';
        $by = $request->by ?? 'DESC';

//        $products = Product::where('products.name','like',"%$search%")->orWhere('description','like',"%$search%");
        $products = Product::where('products.name', 'like', "%$search%")->with('sizes');

        if ($size) {
            $products->whereExists(function ($query) use ($size) {
                $query->selectRaw('1')
                    ->from('sizes')
                    ->whereRaw('products.id = sizes.product_id')
                    ->where('sizes.name', $size);
            });
        }

        if ($category) {
            $products->where('product_category_id', $category);
        }
        if ($brand) {
            $products->where('brand_id', $brand);
        }
        if ($max) {
            $products->where('price', '<=', $max);
        }
        if ($min) {
            $products->where('price', '>=', $min);
        }

        if ($sort == 'product'){
            $products->orderBy('created_at', $by);
        }
        if ($sort == 'price'){
            $products->orderBy($sort, $by);
        }
        if ($sort == 'featured'){
            $products->orderBy($sort, $by);
        }
        return $products->paginate(12);
    }
}
