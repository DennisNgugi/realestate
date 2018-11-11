@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('title')
  <h5>Inquiries</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Property Name</th>
      <th>Property Type</th>
      <th>Property Purpose</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Description</th>
      <th>Location</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($enq as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->property_name}}</td>
      <td>{{$p->propertytype->property_type}}</td>
      <td>{{$p->propertypurpose->property_purpose}}</td>
      <td>{{$p->name}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->mobile}}</td>
      <td>{{$p->description}}</td>
      <td>{{$p->location}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
