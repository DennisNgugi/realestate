@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add Image slider</h5>
@stop
@section('content')
<form class="" action="/homeslider" method="POST" enctype="multipart/form-data">
  @include('partials.errors')
  @csrf
  <fieldset>

      <div class="form-group">
      <label for="">Image slide</label>
      <input type="file" name="image[]" class="form-control" aria-describedby="fileHelp" multiple>
      <small id="fileHelp" class="form-text text-muted">Home Slide show images (You can upload multiple images at once).</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
