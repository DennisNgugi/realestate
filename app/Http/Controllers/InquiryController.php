<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $loc = Inquiry::all();
         return view('Inquiry.index',compact('loc'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       $request->validate([
       'firstname'=>'required',
        'lastname'=>'required',
         'email'=>'required',
          'mobile'=>'required',
          
     ]);
     $loc = new Inquiry([
          'property_id' => $request->route('id'),
         'firstname' => $request->get('firstname'),
         'lastname' => $request->get('lastname'),
         'email' => $request->get('email'),
         'mobile' => $request->get('mobile'),
         'message' => $request->get('message'),
       ]);
       $loc->save();
        return Redirect::back()->with('success', 'The Message');

     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Inquiry  $Inquiry
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Inquiry  $Inquiry
      * @return \Illuminate\Http\Response
      */


     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Inquiry  $Inquiry
      * @return \Illuminate\Http\Response
      */


     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Inquiry  $Inquiry
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $loc = Inquiry::find($id);
       $loc->delete();
         return redirect('/inquiry')->with('success', 'Inquiry has been deleted');
     }
}
