@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Edit property purpose</h5>
@stop
@section('content')
<form class="" action="{{route('property_purpose.update',$pp->id)}}" method="POST">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Property Purpose</label>
      <input type="text" class="form-control" name="property_purpose" value="{{$pp->property_purpose}}" aria-describedby="" placeholder="">
    <!--  <small class="form-text text-muted">Add property purpose either rent/sales.</small>-->
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </fieldset>
</form>
@else
   <script>window.location = "/login";</script>
  @endif
@stop
