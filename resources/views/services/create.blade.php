@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add Services</h5>
@stop
@section('content')
<form class="" action="{{route('services.store')}}" method="POST">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Service</label>
      <input type="text" class="form-control" name="service" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Add service name.</small>
    </div>

    <div class="form-group">
      <label for="">Description</label>
      <textarea name="description" class="form-control" rows="8" cols="10"></textarea>
      <small class="form-text text-muted">Add description.</small>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
