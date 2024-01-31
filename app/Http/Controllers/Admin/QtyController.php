<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class QtyController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        $size = Product::find($request['product_id'])->sizes()->where('name', $request['size'])->get();
//        dd($size);
        if (isset($size[0])) {
            $ColorSizes = DB::table("color_size")
                ->where('size_id', $size[0]->id)
                ->where('color_id', $request['color'])->get();
//                dd(count($ColorSizes));
            if (count($ColorSizes)) {
                DB::table("color_size")
                    ->where('size_id', $size[0]->id)
                    ->where('color_id', $request['color'])
                    ->update([
                        "qty" => $request['qty'] + $ColorSizes[0]->qty,
                    ]);
                return Redirect::back()->withSuccess('Add successfully!');
            }
            $size[0]->colors()->attach($request['color'], ['qty' => $request['qty']]);
            return Redirect::back()->withSuccess('Add successfully!');
        }
        $sizeTemp = Size::create(['name' => $request['size'], 'product_id' => $request['product_id']]);
        $sizeTemp->colors()->attach($request['color'], ['qty' => $request['qty']]);

        return Redirect::back()->withSuccess('Add successfully!');
    }

    public function update(Request $request)
    {
//      dd($request->all());
        DB::table("color_size")
            ->where('size_id', $request['size_id'])
            ->where('color_id', $request['color'])
            ->update([
                "qty" => $request['qty'],
            ]);
        return Redirect::back()->withSuccess('You have successfully Update a Qty Product!');
    }

    public function destroy(Request $request)
    {
        $size = Size::find($request['sizeId']);
        $size->colors()->detach($request['colorId']);

        session()->flash('success', 'Delete successfully!');
        return true;
    }
}
