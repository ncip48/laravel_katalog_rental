<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileimage = $request->file('file');
        $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
        $fileimage->move(public_path('img/slider'), $nameimage);

        $fullPathUriImage = $nameimage;

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'foto' => $fullPathUriImage,
        ]);
        return redirect(route('slider.index'))->with('success', 'Slider berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $input = $request->all();
        if ($image = $request->file('file')) {
            $fileimage = $request->file('file');
            $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
            $fileimage->move(public_path('img/slider'), $nameimage);

            $fullPathUriImage = $nameimage;
            $input['foto'] = "$fullPathUriImage";
        } else {
            unset($input['foto']);
        }

        $input['title'] = $request->title;
        $input['description'] = $request->description;
        $slider->update($input);
        return redirect()->route('slider.index')->with('success', 'Slider berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus');
    }
}
