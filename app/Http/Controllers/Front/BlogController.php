<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view("front.blog" ,compact('blogs'));
    }

    public function detail(Blog $blog)
    {
        return view('front.blogdetail', compact('blog'));
    }
}
