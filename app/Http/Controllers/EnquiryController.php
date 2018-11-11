<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use App\Service;
use App\PropertyPurpose;
use App\PropertyType;
use App\EnquiryFiles;
use Image;
class EnquiryController extends Controller
{
  public function index(){
    $enq = Enquiry::with('enquiryimages')->get();
    return view('enquiries.index',compact('enq'));
  }
  public function enquiry(){
    $s5 = Service::all();
    $list = PropertyPurpose::all();
    $type = PropertyType::all();
    return view('enquiry',compact('s5','list','type'));

  }
  public function store(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'mobile' => 'required',
      'property_name'=> 'required',
      'property_purpose' => 'required',
      'property_type' => 'required',
      'location' => 'required',

    ]);

    $enq = new Enquiry([
      'name' =>  $request->get('name'),
      'email' => $request->get('email'),
      'mobile'=>  $request->get('mobile'),
      'property_name' =>  $request->get('property_name'),
      'property_type' =>  $request->get('property_type'),
      'property_purpose' =>  $request->get('property_purpose'),
      'location'=> $request->get('location'),
      'address' => $request->get('address'),
      'description' =>  $request->get('description'),
    ]);
    $enq->save();
    if($request->hasFile('image')){
  $files = $request->file('image');
  foreach($files as $image){
  $img = new EnquiryFiles;
  $img->enquiry_id = $enq->id;
$img->files = $image->getClientOriginalName();
 $img->save();
  $filename =$img->files;
 $location = public_path('enquiry_files/'.$filename);

 Image::make($image)->resize(750, 500)->save($location);

}

}

    return redirect('/enquiry')->with('success','Your enquiry has been submitted');
  }
}
