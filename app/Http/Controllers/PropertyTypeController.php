<?php

namespace App\Http\Controllers;

use App\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $pp = PropertyType::all();
         return view('property_type.index',compact('pp'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('property_type.create');
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
       'property_type'=>'required',
     ]);
     $pp = new PropertyType([
         'property_type' => $request->get('property_type'),

       ]);
       $pp->save();
       return redirect('/property_type')->with('success', 'Property type has been added succesfully');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\PropertyType  $PropertyType
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\PropertyType  $PropertyType
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $pp = PropertyType::find($id);

       return view('property_type.edit', compact('pp'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\PropertyType  $PropertyType
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       $request->validate([
       'property_type'=>'required',
     ]);
     $pp = PropertyType::find($id);
         $pp->property_type = $request->get('property_type');
       $pp->save();
       return redirect('/property_type')->with('success', 'Property type has been updated succesfully');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\PropertyType  $PropertyType
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $pp = PropertyType::find($id);
       $pp->delete();
         return redirect('/property_type')->with('success', 'Property type has been deleted succesfully');
     }
}
