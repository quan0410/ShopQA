<?php

declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';
        $brands = Brand::where('brands.name', 'like', "%$search%")->paginate(5);
        return view('admin.layouts.brands.list', compact('brands'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.layouts.brands.create');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $brand = $request->validate([
            'name' => 'required|min:2|max:255|string|unique:brands'
        ]);
        Brand::create($brand);
        return redirect()->route('admin.brand.index')->withSuccess('You have successfully created a Brand!');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('admin.brand.index')->withSuccess('You have successfully deleted a Brand!');
    }

    /**
     * @param Brand $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Brand $brand)
    {
        return view('admin.layouts.brands.edit', compact('brand'));
    }

    /**
     * @param Request $request
     * @param Brand $brand
     * @return mixed
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|min:2|max:255|string|unique:brands,name,' .$brand->id
        ]);
        $brand->update($request->all());
        return redirect()->route('admin.brand.index')->withSuccess('You have successfully updated a Brand!');
    }
//    public function Search($request)
//    {
//        $search = $request->search ?? '';
//
////        $products = Product::where('products.name','like',"%$search%")->orWhere('description','like',"%$search%");
//        // lấy sizes hiển thị show khi mua trực tiếp
//        $products = Product::where('products.name', 'like', "%$search%")->with('sizes');
//
//        return $products->paginate(12);
//    }
}
