<?php

namespace App\Http\Controllers;

use App\Service;
use App\PropertyPurpose;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $loc = Service::all();
         return view('add_services.index',compact('loc'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('add_services.create');
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
       'service'=>'required',
     ]);
     $loc = new Service([
         'service' => $request->get('service'),
         'description' => $request->get('description'),
       ]);
       $loc->save();
       return redirect('/add_services')->with('success', 'Service has been added');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Service  $Service
      * @return \Illuminate\Http\Response
      */


     public function show($id)
     {
         $s = Service::find($id);
         $s5 = Service::all();
         $list = PropertyPurpose::all();
         return view('services', compact('s','list','s5'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Service  $Service
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $loc = Service::find($id);
       return view('add_services.edit', compact('loc'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Service  $Service
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       $request->validate([
       'service'=>'required',
     ]);
       $loc = Service::find($id);
         $loc->service = $request->get('service');
         $loc->description = $request->get('description');
       $loc->save();
       return redirect('/add_services')->with('success', 'Service has been updated');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Service  $Service
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $loc = Service::find($id);
       $loc->delete();
         return redirect('/add_services')->with('success', 'Service has been deleted');
     }
}
