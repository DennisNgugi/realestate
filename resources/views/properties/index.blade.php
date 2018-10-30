@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('button')

<a href="{{route('properties.create')}}" class="btn btn-primary ">Add New Property</a>

@stop
@section('title')
  <h5>Manage property </h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Property name</th>
      <th>Property purpose</th>
      <th>Property type</th>
      <th>Location</th>
      <th>Price</th>
      <th>Available at</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->property_name}}</td>
      <td>{{$p->propertypurpose->property_purpose}}</td>
      <td>{{$p->propertytype->property_type}}</td>
      <td>{{$p->location->locations}}</td>
      <td>{{$p->price}}</td>
      @if($p->available == "")
      <td>{{"N/A"}}</td>
      @else
      <td>{{$p->available}}</td>
      @endif
      @if($p->status == 0)
      <td><span class="badge badge-success">{{"Available"}}</span></td>
      @else
      <td><span class="badge badge-danger">{{"Booked"}}</span></td>
      @endif
      <td>
        <div class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="{{route('properties.edit',$p->id)}}" class="font-bold">Edit</a></li>
        <li class="divider"></li>
        <li>
          <form action="{{route('properties.destroy',$p->id)}}" method="post">
            @csrf
             @method('DELETE')
            <input type="submit"  onclick="return confirm('Are you sure you want to delete?')"  value="Delete">
          </form>

        </li>
        <li class="divider"></li>
            <li><a href="/book/{{$p->id}}" class="font-bold">Set as booked</a></li>
          </ul>
      </div>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
