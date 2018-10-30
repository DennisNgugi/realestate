@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add Location</h5>
@stop
@section('content')
<form class="" action="{{route('location.store')}}" method="POST">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Location</label>
      <input type="text" class="form-control" name="location" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Add location</small>
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <input type="text" class="form-control" name="address" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Add address</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
