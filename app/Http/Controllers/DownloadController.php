<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Download;
use App\DownloadCategory;
use App\PropertyPurpose;
use App\Service;
use Image;


class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $down = Download::all();
      return view('downloads.index',compact('down'));
    }
    public function display(){
      $down = Download::all();
      $dcat = DownloadCategory::with('download')->get();
      $s1 = Service::all();
      $list = PropertyPurpose::all();
      return view('/downloads',compact('down','s1','list','dcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = DownloadCategory::all();
        return view('downloads.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'file' => 'required',
            'file.*' => 'mimes:doc,pdf,docx,zip'

]);
      /*if($request->hasFile('file')){
        $file = $request->file('file');
      $filename = time().$file->getClientOriginalName();
      Storage::disk('local')->putFileAs(
        'files/'.$filename,
        $file,
        $filename
      );

  }*/
  if($request->hasFile('file')){
  $destination_path = storage_path('uploads');
   $files = $request->file('file');
   foreach($files as $file){
     $filename = $file->getClientOriginalName();
    $upload_success = $file->move($destination_path, $filename);
    if ($upload_success) {
                   #if needed, save to your table
                   $file = new Download;
                   $file->category_id = $request->get('category');
                   $file->name = $request->get('name');

                   $file->file = $filename;
                   $file->save();
           }
   }

}

  return redirect('/downloads')->with('success', 'File has been added');

    }

    public function download($filename)
  {
        $file_path = storage_path('uploads') . "/" . $filename;
        return Response::download($file_path);
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
      $loc = Download::find($id);
      $loc->delete();
        return redirect('/downloads')->with('success', 'File has been deleted');
    }
}
