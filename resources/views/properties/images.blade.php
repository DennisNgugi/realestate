@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add property image</h5>
@stop
@section('content')
<form class="" action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Property name</label>
        <select class="form-control" name="property_name">
            <option value="">Choose Property</option>
            @foreach($prop as $p)
              <option value="{{$p->id}}">{{$p->property_name}}</option>
            @endforeach
        </select>
      <small class="form-text text-muted">Select property name.</small>
    </div>

      <div class="form-group">
      <label for="">Slideshow images</label>
      <input type="file" name="slide[]" class="form-control" aria-describedby="fileHelp" multiple>
      <small id="fileHelp" class="form-text text-muted">Slide show images (Choose multiple images).</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
