<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
//        session()->forget('cart');
//        session()->forget('total_cart');
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
        $id = $request['product-detail-id'];
        $qty = $request['product-detail-qty'] ?? 1;
        $productDetail = ProductDetail::findOrFail($id);
        $productDetail->load(["product"]);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])){
            if (($productDetail->qty) >= ($cart[$id]->qty+$qty)) {
                $cart[$id]->qty++;
                session()->flash('success', 'Product added to cart successfully!');

            } elseif (isset($cart[$id]) && ($productDetail->qty) < ($cart[$id]->qty+$qty)) {
                session()->flash('fail', 'Product quantity is not enough!');
            }

        }  else {
            $productDetail->qty = $qty;
            $cart[$id] = $productDetail;
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
        foreach (session('cart') as $id => $detail){
            $total += $detail['qty'] * ($detail['product']['discount_price'] ?? $detail['product']['price']);
        }
        return $total;
    }

    /**
     * @param Request $request
     */
    protected function updateCart(Request $request)
    {
        if ($request->id && $request->qty){
            $cart = session('cart');
            $cart[$request->id]->qty = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully!');
        }
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
            }
            session()->flash('success', 'Product removed successfully!');
        }
    }
}
