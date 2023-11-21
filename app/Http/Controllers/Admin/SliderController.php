<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.layouts.sliders.list', compact('sliders'));
    }

    public function create()
    {
        return view('admin.layouts.sliders.create');
    }

    public function store(Request $request)
    {
        $slider = $request->validate([
            'title' => 'required|min:5|max:255|string|unique:sales',
            'content' => 'required',
            'url' => 'required',
            'image' => 'required',
            'is_show' => 'int',
        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
//            $fileName = time() . '' . $request->file('image')->getClientOriginalName();
//            $img = Image::make($image->getRealPath());
//            $img->resize(120, 120, function ($constraint) {
//                $constraint->aspectRatio();
//            });

//            $img->stream(); // <-- Key point
//            Storage::disk('local')->put('images'.'/'.$fileName, 'public');
            $slider['image'] = $filePath;
        }
        Slider::create($slider);
        return redirect()->route('admin.slider.index')->withSuccess('You have successfully created a Slider!');
    }

    /**
     * @param Slider $slider
     * @return mixed
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('admin.slider.index')->withSuccess('You have successfully deleted a Slider!');
    }

    /**
     * @param Slider $slider
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Slider $slider)
    {
        return view('admin.layouts.sliders.edit', compact('slider'));
    }

    /**
     * @param Request $request
     * @param Slider $slider
     * @return mixed
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'title' => 'required|min:5|max:255|string|unique:sales',
            'content' => 'required',
            'url' => 'required',
            'image' => 'required',
            'is_show' => 'int',
        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $data['image'] = $filePath;
        }
        $slider->update($data);
        return redirect()->route('admin.slider.index')->withSuccess('You have successfully updated a Slider!');
    }
}
