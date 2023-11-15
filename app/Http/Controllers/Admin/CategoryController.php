<?php

declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.layouts.categories.list', compact('categories'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.layouts.categories.create');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => 'required|min:2|max:255|string|unique:categories'
        ]);
        Category::create($category);
        return redirect()->route('admin.category.index')->withSuccess('You have successfully created a Category!');
    }

    /**
     * @param Category $category
     * @return mixed
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->withSuccess('You have successfully deleted a Category!');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        return view('admin.layouts.categories.edit', compact('category'));
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return mixed
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:2|max:255|string|unique:categories'
        ]);
        $category->update($request->all());
        return redirect()->route('admin.category.index')->withSuccess('You have successfully updated a Category!');
    }
}
