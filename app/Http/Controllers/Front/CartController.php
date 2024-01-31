<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        if (!empty(session('cart'))){
            $this->totalCart();
            session()->put('total_cart', $this->totalCart());

            return view("front.cart");
        }

        return redirect()->route("home");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $sizeId = $request['sizeId'];
        $colorId = $request['colorId'];
        $qty = $request['quantity'] ?? 1;

        $size = Size::where('id',$sizeId)
            ->with(['product','colors' => function($query) use ($colorId){
                    return $query->where('color_id',$colorId)->first();
        }])->first();
        $size->color = $size->colors[0];

        $cartId = $sizeId.$colorId;
        $cart = session()->get('cart', []);
        if (isset($cart[$cartId])){
            if (($size->color->pivot->qty) >= ($cart[$cartId]->qty+$qty)) {
                $cart[$cartId]->qty++;
                session()->flash('success', 'Product added to cart successfully!');

            } elseif (isset($cart[$cartId]) && ($size->color->pivot->qty) < ($cart[$cartId]->qty+$qty)) {
                session()->flash('fail', 'Product quantity is not enough!');
            }

        }  else {
            $size->qty = $qty;
            $cart[$cartId] = $size;
            session()->flash('success', 'Product added to cart successfully!');
        }
        session()->put('cart', $cart);
        session()->put('total_cart', $this->totalCart());
        return redirect()->back();
    }

    /**
     * @return float|int
     */
    protected function totalCart()
    {
        $total = 0;
        $ids = [];
        foreach (session('cart') as $id => $detail){
            $total += $detail['qty'] * ($detail['product']['discount_price'] ?? $detail['product']['price']);
        }
        $products = Product::whereIn('id',$ids)->with('sales')->get();
        foreach ($products as $product);
        return $total;
    }

    /**
     * @param Request $request
     */
    protected function updateCart(Request $request)
    {
        if ($request->id && $request->quantity){
            $cart = session('cart');

            $cart[$request->id]->qty = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully!');
        }
        return true;
    }

    /**
     * @param Request $request
     */
    protected function removeCart(Request $request)
    {
        if ($request->id){
            $cart = session('cart');
            if (isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->put('total_cart', $this->totalCart());
            }
            session()->flash('success', 'Product removed successfully!');
        }
        return redirect()->back();
    }
}
