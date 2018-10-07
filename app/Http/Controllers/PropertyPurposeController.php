<?php

namespace App\Http\Controllers;

use App\PropertyPurpose;
use Illuminate\Http\Request;

class PropertyPurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pp = PropertyPurpose::all();
        return view('property_purpose.index',compact('pp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property_purpose.create');
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
      
    ]);
    $pp = new PropertyPurpose([
        'property_purpose' => $request->get('property_purpose'),

      ]);
      $pp->save();
      return redirect('/property_purpose')->with('success', 'Property purpose has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyPurpose $propertyPurpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pp = PropertyPurpose::find($id);

      return view('property_purpose.edit', compact('pp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
      'property_purpose'=>'required',
    ]);
      $pp = PropertyPurpose::find($id);
        $pp->property_purpose = $request->get('property_purpose');
      $pp->save();
      return redirect('/property_purpose')->with('success', 'Property purpose has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pp = PropertyPurpose::find($id);
      $pp->delete();
        return redirect('/property_purpose')->with('success', 'Property purpose has been deleted');
    }
}
