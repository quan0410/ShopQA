<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view("front.user", compact("user"));
        }
        return redirect()->route("home");
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'min:5|max:255|string|unique:users,name,' .$user->id,
            'email' => 'required|email|unique:users,email,' .$user->id,
            'address' => 'string|required',
            'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10|unique:users,phone,' .$user->id,
        ]);
        $user->update($data);
        return redirect()->route('user.index')->withSuccess('You have successfully update!');
    }

    public function orderHistory() {
        if (Auth::check()) {
            $user = Auth::user();
            $orders = $user->order()->get();
            return view("front.orderhistory", compact("user", "orders"));
        }
        return redirect()->route("home");
    }
}
