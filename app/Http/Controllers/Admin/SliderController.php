<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','DESC')->paginate(3);

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStoreRequest $request)
    {
        $requestData = $request->all();
        if($request->hasFile('img')){
            $requestData['img'] = $this->file_upload();  
        }

        Slider::create($requestData);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        $requestData = $request->all();

        if($request->hasFile('img')){
            if(isset($slider->img) && file_exists(public_path('/files/'.$slider->img))){
                unlink(public_path('/files/'.$slider->img));
            }
            $requestData['img'] = $this->file_upload(); 
        }

        $slider->update($requestData);
        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(isset($slider->img) && file_exists(public_path('/files/'.$slider->img))){
            unlink(public_path('/files/'.$slider->img));
        }

        $slider->delete();

        return redirect()->route('admin.slider.index');

    }

    public function file_upload(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('files/', $fileName);
        return $fileName;
    }
}
