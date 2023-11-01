<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    public function index()
    {
        if (!empty(session('cart')) && Auth::check()){
            $user = Auth::user();
            $cart = session('cart');
            $total= session('total_cart');

            return view("front.checkout", compact("user", "cart", "total"));
        }
        return redirect()->route("home");
    }
}
