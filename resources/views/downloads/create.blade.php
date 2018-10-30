@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add file</h5>
@stop
@section('content')
<form class="" action="{{route('downloads.store')}}" method="POST" enctype="multipart/form-data">
  @include('partials.errors')
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">File name</label>
      <input type="text" name="name" class="form-control" value="">
      <small class="form-text text-muted">Enter file name.</small>
    </div>
    <div class="form-group">
      <label for="">File Category</label>
        <select class="form-control" name="category">
            <option value="">Choose Category</option>
            @foreach($cat as $c)
            <option value="{{$c->id}}">{{$c->category}}</option>
            @endforeach
        </select>
      <small class="form-text text-muted">Choose file category.</small>
    </div>
      <div class="form-group">
      <label for="">File</label>
      <input type="file" name="file[]" class="form-control" aria-describedby="fileHelp" multiple>
      <!--<small id="fileHelp" class="form-text text-muted">Slide show images (Choose multiple images).</small>-->
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@stop
@else
   <script>window.location = "/login";</script>
  @endif
