@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('button')

<a href="{{route('downloads.create')}}" class="btn btn-primary ">Add New File</a>

@stop
@section('title')
  <h5>Manage Files</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>File name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($down as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->name}}</td>

      <td>
        <form action="{{route('downloads.destroy',$p->id)}}" method="post">
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
