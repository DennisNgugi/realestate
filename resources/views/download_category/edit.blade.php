@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Add Download Category</h5>
@stop
@section('content')
<form class="" action="{{route('category.update',$cat->id)}}" method="POST">
  @include('partials.errors')
  @csrf
  @method('PATCH')
  <fieldset>
    <div class="form-group">
      <label for="">Download Category</label>
      <input type="text" class="form-control" name="category" id="" aria-describedby="" value="{{$cat->category}}">
      <small class="form-text text-muted">Add category</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
