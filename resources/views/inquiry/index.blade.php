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
      <th>Activate</th>
      <th>Deactivate</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($inquiry as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->property_id}}</td>
      <td>{{$p->property_inquiry->property_name}}</td>
      <td>{{$p->firstname.''.$p->lastname}}</td>
      <td>{{$p->email}}</td>
      <td>{{$p->mobile}}</td>
      <td>{{$p->message}}</td>
      <td>{{$p->created_at}}</td>
        <td>
        @if($p->property_inquiry->status != 0)
        <form action="/issue/{{$p->id}}/{{$p->property_id}}" method="post">
          @csrf
          <input type="submit" onclick="return confirm('Do you want to issue out this property?')" class="btn btn-warning" value="Archived">
        </form>
        @else
        <form action="/issue/{{$p->id}}/{{$p->property_id}}" method="post">
          @csrf
          <input type="submit" onclick="return confirm('Do you want to issue out this property?')" class="btn btn-success" value="Activate">
        </form>
        @endif
      </td>
      <td>
        <form action="/unissue/{{$p->id}}/{{$p->property_id}}" method="post">
          @csrf
          <input type="submit" onclick="return confirm('Do you want to deactivate this property?')" class="btn btn-danger" value="Deactivate">
        </form>
      </td>
      <td>
        <form action="/property_inquiries/{{$p->id}}" method="post">
          @csrf
           @method('DELETE')
          <input type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" value="Delete">
        </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
@else
   <script>window.location = "/login";</script>
  @endif
