@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Manage Services</h5>
@stop
@section('content')
<form class="" action="{{route('add_services.update',$loc->id)}}" method="POST">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Service</label>
      <input type="text" class="form-control" name="service" value="{{$loc->service}}" id="" aria-describedby="" placeholder="">

    </div>

    <div class="form-group">
      <label for="">Description</label>
      <textarea name="description" class="form-control" rows="8" cols="8">{{$loc->description}}</textarea>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
