<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewProductController extends Controller
{
    public function create(Request $request, $id)
    {
        $userId = auth()->user()->id?? '';
        if ($userId) {
            $request['product_id'] = $id;
            $request['user_id'] = $userId;
            $review = $request->validate([
                'content' => 'string||nullable',
                'rate' => 'required',
                'product_id' => 'required',
                'user_id' => 'required',
            ]);
            Review::create($review);
            return redirect()->back();
        }
        return redirect('login');
    }
}
