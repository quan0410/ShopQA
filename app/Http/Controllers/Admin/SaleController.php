<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sales = Sales::paginate(5);
        return view('admin.layouts.sales.list', compact('sales'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.layouts.sales.create', compact('products'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $sale = $request->validate([
            'title' => 'required|min:5|max:255|string|unique:sales',
            'content' => 'required',
            'product_id' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'is_show' => 'int',
        ]);
        Sales::create($sale);
        return redirect()->route('admin.sale.index')->withSuccess('You have successfully created a Sale!');

    }

    /**
     * @param Sales $sale
     * @return mixed
     */
    public function destroy(Sales $sale)
    {
        $sale->delete();
        return redirect()->route('admin.sale.index')->withSuccess('You have successfully deleted a Sale!');
    }

    /**
     * @param Sales $sale
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Sales $sale)
    {
        $products = Product::all();
        return view('admin.layouts.sales.edit', compact('sale', 'products'));
    }

    public function update(Request $request,Sales $sale)
    {
        $request->validate([
            'title' => 'required|min:5|max:255|string|unique:sales,title,' .$sale->id,
            'content' => 'required',
            'product_id' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'is_show' => 'int',
        ]);
        $sale->update($request->all());
        return redirect()->route('admin.sale.index')->withSuccess('You have successfully update a Sale!');
    }
}
