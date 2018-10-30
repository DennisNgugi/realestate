@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Edit property type</h5>
@stop
@section('content')
<form class="" action="{{route('property_type.update',$pp->id)}}" method="POST">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Property Type</label>
      <input type="text" class="form-control" name="property_type" value="{{$pp->property_type}}" aria-describedby="" placeholder="">
    <!--  <small class="form-text text-muted">Add property type e.g Apartment,Commercial, Land.</small>-->
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </fieldset>
</form>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
