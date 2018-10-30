@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Edit Location</h5>

@stop
@section('content')
<form class="" action="{{route('location.update',$loc->id)}}" method="POST">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Location</label>
      <input type="text" class="form-control" name="location" value="{{$loc->locations}}" aria-describedby="" placeholder="">
    <!--  <small class="form-text text-muted">Add property type e.g Apartment,Commercial, Land.</small>-->
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" class="form-control" name="address" value="{{$loc->address}}" aria-describedby="" placeholder="">
    <!--  <small class="form-text text-muted">Add property type e.g Apartment,Commercial, Land.</small>-->
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
