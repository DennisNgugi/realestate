@extends('layouts.admin')
@section('button')

<a href="{{route('location.create')}}" class="btn btn-primary ">Add New Location</a>

@stop
@section('title')
  <h5>Manage location</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Location</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($loc as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->locations}}</td>
      @if($p->address == "")
      <td>{{"N/A"}}</td>
      @else
      <td>{{$p->address}}</td>
      @endif
      <td>
        <div class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="{{route('location.edit',$p->id)}}" class="font-bold">Edit</a></li>
        <li class="divider"></li>
        <li>
          <form action="{{route('location.destroy',$p->id)}}" method="post">
            @csrf
             @method('DELETE')
            <input type="submit"  value="Delete">
          </form>

        </li>
        <li class="divider"></li>

          </ul>
      </div>
      </td>
      <td>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
