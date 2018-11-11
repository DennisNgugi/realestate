@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('button')

<a href="/homeslider/create" class="btn btn-primary ">Add New Slider</a>

@stop
@section('title')
  <h5>Manage Image Slider</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($img as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td><img src="/home-slides/{{$p->slider}}" alt="" border=3 height=150 width=150></img></td>

      <td>
        <form action="/homeslider/{{$p->id}}" method="post">
          @csrf
           @method('DELETE')
          <input type="submit"  onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" value="Delete">
        </form>
      </td>
      <td>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
