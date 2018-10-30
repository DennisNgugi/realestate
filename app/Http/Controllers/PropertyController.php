<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Property;
use App\PropertyPurpose;
use App\PropertyType;
use App\Location;
use App\Images;
use App\Inquiry;
use Image;
use App\Service;
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
    public function issue($id,$p_id){
      $iss = Inquiry::findorFail($id);
      $prop = Property::findorFail($p_id);
      Property::where('id',$prop->id)->update(['status' => $iss->id]);
      return Redirect::back()->with('success','Property has been archived Successfully !');
    }
    public function unissue($id,$p_id){
      $iss = Inquiry::findorFail($id);
      $prop = Property::findorFail($p_id);
      Property::where('id',$prop->id)->update(['status' => 0]);
      return Redirect::back()->with('success','Property has been unarchived Successfully !');
    }
    public function featured(){
      $post = Property::where('status',0)->get();
      return view('featured.index',compact('post'));
    }
    public function issued(){
      $inquiry = Property::where('status','>',0)->get();
      return view('issued.index',compact('inquiry'));
    }
    public function home(){
      $post = Property::all();
      $s1 = Service::all();
      $type = PropertyType::all();
      $loc = Location::all();
      $list = PropertyPurpose::all();
      return view('home',compact('post','s1','list','loc','type'));
    }
    public function about(){
      $s1 = Service::all();
      $list = PropertyPurpose::all();

      return view('about',compact('s1','loc','list'));
    }
    public function allproperty(){
      $post = Property::all();
      $s1 = Service::all();
      $list = PropertyPurpose::all();
      return view('allproperties',compact('post','s1','list'));
    }
    public function contact(){
      $post = Property::all();
      $s1 = Service::all();
      $list = PropertyPurpose::all();
      return view('contact',compact('post','s1','list'));
    }
    public function book($id){
      $book = Property::find($id);
    }

    public function showProperty($id){
    $post = Property::where('property_purpose_id', $id)->orderBy('status', 'desc')->get();
    $ps = PropertyPurpose::all();
    $s3 = Service::all();

      return view('property_list',compact('post','ps','s3'));
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
      'image' => 'required | mimes:jpeg,jpg,png ',

    ]);

    if($request->hasFile('image')){
      $image = $request->file('image');
      $filename = $image->getClientOriginalName();
      $location = public_path('images/'.$filename);
      Image::make($image)->resize(750, 500)->save($location);
}
if($request->hasFile('photo1')){
  $image = $request->file('photo1');
  $filename1 = $image->getClientOriginalName();
  $location = public_path('images/'.$filename1);
  Image::make($image)->resize(350, 250)->save($location);
}
if($request->hasFile('photo2')){
  $image = $request->file('photo2');
  $filename2 = $image->getClientOriginalName();
  $location = public_path('images/'.$filename2);
  Image::make($image)->resize(350, 250)->save($location);
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
        $post->square_foot = $request->get('square');
        $post->description = $request->get('description');
        $post->featured_image = $filename;
        $post->best_photo_1 = $filename1;
        $post->best_photo_2 = $filename2;
        $post->available = $request->get('available');

      $post->save();
      return redirect('/properties')->with('success', 'Property  has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post = Property::find($id);
        $pst = PropertyPurpose::all();
        $s2 = Service::all();
        $image = Images::where('property_id',$post->id)->get();
        $data = Property::all();
        if(!$post)
        {
            return redirect('home');
        }
        return view('property',compact('post','s2','pst','image','data'));
    }
    public function inqex(){
      $inquiry = Inquiry::orderBy('created_at','asc')->get();
      return view('inquiry.index',compact('inquiry'));
    }
    public function inquiry(Request $request )
    {
      $request->validate([
      'firstname'=>'required',
       'lastname'=>'required',
        'email'=>'required',
         'mobile'=>'required',

    ]);

    $loc = new Inquiry([
         'property_id' => $request->get('p_id'),
        'firstname' => $request->get('firstname'),
        'lastname' => $request->get('lastname'),
        'email' => $request->get('email'),
        'mobile' => $request->get('mobile'),
        'message' => $request->get('message'),
      ]);
      $loc->save();
        return Redirect::back()->with('success','Inquiry Sent Successfully !');

    }
    public function del($id){
      $inq = Inquiry::find($id);
      $inq->delete();
      return redirect('/property_inquiries')->with('success', 'Inquiry has been deleted');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prop = Property::find($id);
        $pt = PropertyType::all();
        $loc = Location::all();
        $pp = PropertyPurpose::all();
        return view('properties.edit',compact('prop','pp','pt','loc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
      'property_purpose'=>'required',
      'property_name'=>'required',
      'property_type'=>'required',
      'price'=>'required|integer',
      'description'=>'required',
      'image' => 'mimes:jpeg,jpg,png ',

    ]);

    $post = Property::find($id);
    $post->property_name = $request->get('property_name');
    $post->property_purpose_id = $request->get('property_purpose');
    $post->property_type_id = $request->get('property_type');
    $post->location_id = $request->get('location');
    $post->price = $request->get('price');
    $post->bedrooms = $request->get('bedroom');
    $post->bathrooms = $request->get('bathroom');
    $post->garage = $request->get('garage');
    $post->description = $request->get('description');
    if($request->hasFile('image')){
      $image = $request->file('image');
      $filename = $image->getClientOriginalName();
      $location = public_path('images/'.$filename);
      Image::make($image)->resize(750, 500)->save($location);
      $oldfile1 = $post->featured_image;
      //update the database
      $post->featured_image = $filename;
      Storage::delete($oldfile1);
}
if($request->hasFile('photo1')){
  $image = $request->file('photo1');
  $filename1 = $image->getClientOriginalName();
  $location = public_path('images/'.$filename1);
  Image::make($image)->resize(350, 250)->save($location);

  $oldfile2 = $post->best_photo_1;
  //update the database
  $post->best_photo_1 = $filename1;
  Storage::delete($oldfile2);
}
if($request->hasFile('photo2')){
  $image = $request->file('photo2');
  $filename2 = $image->getClientOriginalName();
  $location = public_path('images/'.$filename2);
  Image::make($image)->resize(350, 250)->save($location);

  $oldfile3 = $post->best_photo_2;
  //update the database
  $post->best_photo_2 = $filename2;
  Storage::delete($oldfile3);
}
    $post->available = $request->get('available');
    $post->save();
    return redirect('/properties')->with('success', 'Property  has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Property::find($id);
        $post->delete();
        return redirect('/properties')->with('success', 'Property  has been deleted');

    }
}
