@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add property purpose</h5>
@stop
@section('content')
<form class="" action="{{route('property_purpose.store')}}" method="POST">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Property Purpose</label>
      <input type="text" class="form-control" name="property_purpose" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">Add property purpose either rent/sales.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
