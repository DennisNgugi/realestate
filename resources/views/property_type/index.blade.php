@extends('layouts.admin')
@section('button')

  <a href="{{route('property_type.create')}}" class="btn btn-primary ">Add New Property Type</a>

@stop
@section('title')
  <h5>Manage property type</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Property Type</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pp as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->property_type}}</td>
      <td>
        <div class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="{{route('property_type.edit',$p->id)}}" class="font-bold">Edit</a></li>
        <li class="divider"></li>
        <li>
          <form action="{{route('property_type.destroy',$p->id)}}" method="post">
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
