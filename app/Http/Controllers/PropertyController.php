<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPurpose;
use App\PropertyType;
use App\Location;
use Image;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Property::all();
        return view('properties.index',compact('post'));
    }
    public function home(){
      $post = Property::all();
      return view('home',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pt = PropertyType::all('id','property_type');
        $pp = PropertyPurpose::all('id','property_purpose');
        $loc = Location::all('id','locations');
        return view('properties.create',compact('pt','pp','loc'));
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
      'property_purpose'=>'required',
      'property_name'=>'required',
      'property_type'=>'required',
      'price'=>'required|integer',
      'description'=>'required',
      'image' => 'required | mimes:jpeg,jpg,png | max:2000',

    ]);

    if($request->hasFile('image')){
      $image = $request->file('image');
      $filename = time().".".$image->getClientOriginalExtension();
      $location = public_path('images/'.$filename);
      Image::make($image)->resize(750, 500)->save($location);


}
        $post = new Property;
        $post->property_name = $request->get('property_name');
        $post->property_purpose_id = $request->get('property_purpose');
        $post->property_type_id = $request->get('property_type');
        $post->location_id = $request->get('location');
        $post->price = $request->get('price');
        $post->bedrooms = $request->get('bedroom');
        $post->bathrooms = $request->get('bathroom');
        $post->garage = $request->get('garage');
        $post->description = $request->get('description');
        $post->featured_image = $filename;



      $post->save();
      return redirect('/properties')->with('success', 'Property  has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
        $post = Property::find($id);
        if(!$post){
            return redirect('home');
        }
        return view('preview_property',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
