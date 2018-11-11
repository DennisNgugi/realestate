<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img = SLider::all();
        return view('imageslider.index',compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('imageslider.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'image' => 'required',
        'image.*' => 'mimes:jpeg,jpg,png ',

      ]);

          if($request->hasFile('image')){
            $files = $request->file('image');
            foreach($files as $image){
            $filename = $image->getClientOriginalName();
            $location = public_path('home-slides/'.$filename);
            Image::make($image)->resize(1920, 1080)->save($location);
              if($location){
              $img = new Slider;

              $img->slider = $filename;
              $img->save();
            }
              }
      }
      return redirect('/homeslider')->with('success', 'Image Slider has been added');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $img = Slider::find($id);
          $img->delete();
          return redirect('/homeslider')->with('success', 'Image Slider has been deleted');
    }
}
