<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use App\Property;
use Image;


class PropertyImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propimg = Images::all();
        return view('properties.display',compact('propimg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prop = Property::all('id','property_name');
        return view('properties.images',compact('prop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'property_name'=>'required',


    ]);



    if($request->hasFile('slide')){
      $files = $request->file('slide');
      foreach($files as $image){
      $filename = $image->getClientOriginalName();
      $location = public_path('slides/'.$filename);
      Image::make($image)->resize(750, 500)->save($location);
        if($location){
        $img = new Images;
        $img->property_id = $request->get('property_name');
        $img->images = $filename;
        $img->save();
      }
        }
}


return redirect('/image')->with('success', 'Property Image Slider has been added');

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
        $img  = Images::find($id);
        $img->delete();
         return redirect('/image')->with('success', 'Property Image Slider has been deleted');
    }
}
