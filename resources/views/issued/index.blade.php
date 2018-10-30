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
      <th>Inquiry ID</th>
      <th>Property ID</th>
      <th>Property Name</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Message</th>
      <th>Time</th>

    </tr>
  </thead>
  <tbody>
    @foreach($inquiry as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->property_id}}</td>
      <td>{{$p->inquiry->property_name}}</td>
      <td>{{$p->firstname.''.$p->lastname}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->mobile}}</td>
      <td>{{$p->message}}</td>
      <td>{{$p->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
