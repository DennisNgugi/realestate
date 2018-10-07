
@extends('layouts.admin')
@section('title')
  <h5>Add property type</h5>
@stop
@section('content')
<form class="" action="{{route('property_type.store')}}" method="POST">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Property Type</label>
      <input type="text" class="form-control" name="property_type" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Add property type e.g Apartment,Commercial, Land.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@stop
