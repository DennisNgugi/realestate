<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $loc = Location::all();
         return view('location.index',compact('loc'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('location.create');
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
       'location'=>'required',
     ]);
     $loc = new Location([
         'locations' => $request->get('location'),
         'address' => $request->get('address'),
       ]);
       $loc->save();
       return redirect('/location')->with('success', 'Location has been added');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Location  $Location
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Location  $Location
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $loc = Location::find($id);

       return view('location.edit', compact('loc'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Location  $Location
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       $request->validate([
       'location'=>'required',
     ]);
       $loc = Location::find($id);
         $loc->locations = $request->get('location');
         $loc->address = $request->get('address');
       $loc->save();
       return redirect('/location')->with('success', 'Location has been updated');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Location  $Location
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $loc = Location::find($id);
       $loc->delete();
         return redirect('/location')->with('success', 'Location has been deleted');
     }
}
