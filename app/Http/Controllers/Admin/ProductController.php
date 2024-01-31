<?php
declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';
        $products = Product::where('products.name', 'like', "%$search%")->orderBy('created_at' , 'desc')->paginate(5);
        return view('admin.layouts.products.list', compact('products'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.layouts.products.create', compact('brands', 'categories', 'colors'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $data = $request->validate([
            'name' => 'required|unique:products',
            'sku' => 'required|unique:products',
            'brand_id' => 'required',
            'product_category_id' => 'required',
            'description' => 'string',
            'content' => 'string|nullable',
            'image' => 'required',
            'original_price' => 'required',
            'price' => 'required',
            'percent_discount' => 'string|nullable',
            'discount_price' => 'string|nullable',
            'weight' => 'numeric|nullable',
            'featured' => 'numeric',
        ]);

        if (isset($request['percent_discount'])) {
            $data['discount_price'] = ($request['price'] * (100 - $request['percent_discount']))/ 100;
        }
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $data['image'] = $filePath;
        }

        $product = Product::create($data);
        if ($request->hasFile('path')) {
            foreach ($request['path'] as $path) {
                $filePath = $path->store('images', 'public');
                ProductImage::create(['path' => $filePath, 'product_id' => $product->id]);
            }
        }
//        foreach ($request['sizes'] as $key => $size) {
//            $sizeTemp = Size::create(['name' => $size, 'product_id'=> $product->id]);
//            $sizeTemp->colors()->attach($request['colors'][$key],['qty' => $request['qty'][$key]]);
//        }

        return redirect()->route('admin.product.index')->withSuccess('You have successfully created a Product!');

    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')->withSuccess('You have successfully deleted a Product!');
    }

    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $colors = Color::all();
        $sizes = $product->sizes()->get();
        $productImages = $product->productImage()->get();
        return view('admin.layouts.products.edit', compact('brands', 'categories', 'colors', 'product', 'sizes', 'productImages'));
    }

    public function update(Request $request, Product $product)
    {
//        dd(empty($request['percent_discount']));
        $data = $request->validate([
            'name' => 'required|unique:products,name,' . $product->id,
            'sku' => 'required|unique:products,sku,' . $product->id,
            'brand_id' => 'required',
            'product_category_id' => 'required',
            'description' => 'string',
            'content' => 'string|nullable',
            'image' => 'nullable',
            'original_price' => 'required',
            'price' => 'required',
            'percent_discount' => 'string|nullable',
            'discount_price' => 'string|nullable',
            'weight' => 'numeric|nullable',
            'featured' => 'numeric',
        ]);
        if (isset($request['percent_discount'])) {
            $data['discount_price'] = ($request['price'] * (100 - $request['percent_discount']))/ 100;
        }
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $data['image'] = $filePath;
        }

        $product->update($data);
        if ($request->hasFile('path')) {
            $product->productImage()->delete();
            foreach ($request['path'] as $path) {
                $filePath = $path->store('images', 'public');
                ProductImage::create(['path' => $filePath, 'product_id' => $product->id]);
            }
        }
        return redirect()->route('admin.product.index')->withSuccess('You have successfully Update a Product!');
    }
}
