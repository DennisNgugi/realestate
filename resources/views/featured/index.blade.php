@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Featured properties </h5>
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
      @endif


    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
