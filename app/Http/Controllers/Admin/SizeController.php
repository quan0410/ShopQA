<?php
//
//declare(strict_types=1);
//namespace App\Http\Controllers\Admin;
//
//use App\Http\Controllers\Controller;
//use App\Models\Brand;
//use App\Models\Size;
//use Illuminate\Http\Request;
//
//class SizeController extends Controller
//{
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function index(Request $request)
//    {
//        $search = $request->search ?? '';
//        $sizes = Size::where('sizes.name', 'like', "%$search%")->paginate(5);
//        return view('admin.layouts.sizes.list', compact('sizes'));
//    }
//
//    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function create()
//    {
//        return view('admin.layouts.sizes.create');
//    }
//
//    /**
//     * @param Request $request
//     * @return mixed
//     */
//    public function store(Request $request)
//    {
//        $size = $request->validate([
//            'name' => 'required|max:255|string|unique:sizes'
//        ]);
//        Brand::create($size);
//        return redirect()->route('admin.size.index')->withSuccess('You have successfully created a Size!');
//    }
//
//    /**
//     * @param $id
//     * @return mixed
//     */
//    public function destroy(Size $size)
//    {
//        $size->delete();
//        return redirect()->route('admin.size.index')->withSuccess('You have successfully deleted a Size!');
//    }
//
//    /**
//     * @param Size $size
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
//     */
//    public function edit(Size $size)
//    {
//        return view('admin.layouts.sizes.edit', compact('size'));
//    }
//
//    /**
//     * @param Request $request
//     * @param Size $size
//     * @return mixed
//     */
//    public function update(Request $request, Size $size)
//    {
//        $request->validate([
//            'name' => 'required|max:255|string|unique:sizes,name,' .$size->id
//        ]);
//        $size->update($request->all());
//        return redirect()->route('admin.size.index')->withSuccess('You have successfully updated a Size!');
//    }
//}
