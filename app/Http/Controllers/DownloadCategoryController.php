<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DownloadCategory;

class DownloadCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $cat = DownloadCategory::all();
         return view('download_category.index',compact('cat'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('download_category.create');
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
       'category'=>'required',
     ]);
     $cat = new DownloadCategory([
         'category' => $request->get('category'),
       ]);
       $cat->save();
       return redirect('/category')->with('success', 'Category has been added');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\DownloadCategory  $DownloadCategory
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\DownloadCategory  $DownloadCategory
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $cat = DownloadCategory::find($id);

       return view('download_category.edit', compact('cat'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\DownloadCategory  $DownloadCategory
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       $request->validate([
       'category'=>'required',
     ]);
       $cat = DownloadCategory::find($id);
         $cat->category = $request->get('category');
       $cat->save();
       return redirect('/category')->with('success', 'Category has been updated');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\DownloadCategory  $DownloadCategory
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $cat = DownloadCategory::find($id);
       $cat->delete();
         return redirect('/category')->with('success', 'Category has been deleted');
     }
}
