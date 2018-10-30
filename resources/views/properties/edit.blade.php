@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Manage property</h5>
@stop
@section('content')
<form class="" action="{{route('properties.update',$prop->id)}}" method="POST" enctype="multipart/form-data">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Property name</label>
      <input type="text" name="property_name" class="form-control" id="" aria-describedby="" value="{{$prop->property_name}}">
      <small class="form-text text-muted">Enter new property name.</small>
    </div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Property Purpose</label>
      <form method="get" id="property_purpose">
      <select name="property_purpose" class="form-control">
        <option >Property Purpose</option>
        @foreach($pp as $pp)
        <option value="{{$pp->id}}"
          @if($pp->id === $prop->property_purpose_id)
          selected
          @endif
          >
          {{$pp->property_purpose}}
        </option>
        @endforeach
      </select>
    </form>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Property Type</label>
      <select name="property_type"class="form-control">
        <option >Property Type</option>
        @foreach($pt as $pt)
        <option value="{{$pt->id}}" @if($pt->id === $prop->property_type_id) selected @endif>{{$pt->property_type}}</option>
        @endforeach
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="">Location</label>
  <select name="location" class="form-control">
    <option >Choose Location</option>
    @foreach($loc as $pt)
    <option value="{{$pt->id}}" @if($pt->id === $prop->location_id) selected @endif>{{$pt->locations}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="">Price</label>
  <input type="text" name="price" value="{{$prop->price}}" class="form-control" id="" aria-describedby="" placeholder="">
  <small class="form-text text-muted">Enter property price.</small>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Bedrooms</label>
      <input type="text" name="bedroom" value="{{$prop->bedrooms}}" class="form-control" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Enter no of bedrooms.</small>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Bathrooms</label>
      <input type="text" name="bathroom" value="{{$prop->bathrooms}}" class="form-control" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Enter no of bathrooms .</small>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Garage</label>
      <input type="text" name="garage" value="{{$prop->garage}}" class="form-control" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Enter no of garages.</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Square foot</label>
      <input type="text" name="square" value="{{$prop->square_foot}}" class="form-control" id="" aria-describedby="" placeholder="">

    </div>
  </div>
<div class="col-md-4">
  <div class="form-group">
    <label for="">Available at:</label>
    <input type="date" name="available" value="{{$prop->available}}" class="form-control" id="" aria-describedby="" placeholder="">
    <small class="form-text text-muted">Enter available date for having the property.(optional)</small>
  </div>
</div>
</div>
<div class="form-group">
      <label for="">Description</label>
      <textarea name="description"  class="form-control"  rows="10">{{$prop->description}}</textarea>
    </div>

    <div class="form-group">
      <label for="">Featured image</label>
      <input type="file" name="image" class="form-control"  aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Image to be displayed as featured in the home page.</small>
    </div>
    <div class="form-group">
      <label for="">Best photo 1</label>
      <input type="file" name="photo1" class="form-control"  aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Image to be displayed on the top corner of  the printing page.</small>
    </div>
    <div class="form-group">
      <label for="">Best photo 2</label>
      <input type="file" name="photo2" class="form-control"  aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Image to be displayed on the bottom corner of  the printing page.</small>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
