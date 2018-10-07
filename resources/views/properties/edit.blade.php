
@extends('layouts.admin')
@section('title')
  <h5>Add property</h5>
@stop
@section('content')
<form class="" action="" method="POST">
  @csrf
  <fieldset>
    <div class="form-group">
      <label for="">Email address</label>
      <input type="email" class="form-control" id="" aria-describedby="" placeholder="">
      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Example select</label>
      <select class="form-control" id="exampleSelect1">
        <option>1</option>
      
      </select>
    </div>

    <div class="form-group">
      <label for="">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@stop
