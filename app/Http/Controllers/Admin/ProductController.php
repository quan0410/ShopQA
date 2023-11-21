<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.layouts.products.list', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.layouts.products.create', compact('brands', 'categories', 'colors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:products',
            'sku' => 'required|unique:products',
            'brand_id' => 'required',
            'product_category_id' => 'required',
            'description' => 'string',
            'content' => 'string',
            'image' => 'required',
            'price' => 'required',
            'discount_price' => 'string',
            'weight' => 'numeric',
            'featured' => 'numeric',
        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $data['image'] = $filePath;
        }

        $product = Product::create($data);
        foreach ($request['sizes'] as $key => $size) {
            $sizeTemp = Size::create(['name' => $size, 'product_id'=> $product->id]);
            $sizeTemp->colors()->attach($request['colors'][$key],['qty' => $request['qty'][$key]]);
        }

        return redirect()->route('admin.product.index')->withSuccess('You have successfully created a Product!');

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')->withSuccess('You have successfully deleted a Product!');
    }
}
