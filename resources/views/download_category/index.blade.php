@if(isset(Auth::user()->email))
@extends('layouts.admin')
@section('button')

<a href="{{route('category.create')}}" class="btn btn-primary ">Add New Download Category</a>

@stop
@section('title')
  <h5>Manage Download Categories</h5>
@stop
@section('content')
@include('partials.success')
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Download Category</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($cat as $p)

    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->category}}</td>
      <td>
        <div class="btn-group">
    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="{{route('category.edit',$p->id)}}" class="font-bold">Edit</a></li>
        <li class="divider"></li>
        <li>
          <form action="{{route('category.destroy',$p->id)}}" method="post">
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
@else
   <script>window.location = "/login";</script>
  @endif
