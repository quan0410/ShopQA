<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';
        $blogs = Blog::where('blogs.title', 'like', "%$search%")->paginate(5);
        return view('admin.layouts.blogs.list', compact('blogs'));
    }

    /**
     * @param Blog $blog
     * @return mixed
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->withSuccess('You have successfully deleted a Blog!');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.layouts.blogs.create', compact('categories'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $request['user_id'] = $userId;

        $blog = $request->validate([
            'title' => 'required|min:5|max:255|string|unique:blogs',
            'content' => 'required',
            'image' => 'required',
            'category' => 'required',
            'user_id' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $blog['image'] = $filePath;
        }
        Blog::create($blog);
        return redirect()->route('admin.blog.index')->withSuccess('You have successfully created a Blog!');
    }

    /**
     * @param Blog $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.layouts.blogs.edit', compact('categories', 'blog'));
    }

    /**
     * @param Request $request
     * @param Blog $blog
     * @return mixed
     */
    public function update(Request $request, Blog $blog)
    {
        $userId = auth()->user()->id;
        $request['user_id'] = $userId;

        $data = $request->validate([
            'title' => 'required|min:5|max:255|string|unique:blogs,title,'. $blog->id,
            'content' => 'required',
            'category' => 'required',
            'user_id' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $data['image'] = $filePath;
        }
        $blog->update($data);
        return redirect()->route('admin.blog.index')->withSuccess('You have successfully created a Blog!');
    }
}
