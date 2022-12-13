@extends('backend.master')

@section('content')
<div>
  <h1>Shop list</h1>
  <a class="btn btn-primary" href="{{route('shop.create')}}">Add Shop</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Shop id</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Shop Address</th>
      <th scope="col" style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>


  @foreach($shops as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->image}}</td>
      <td>{{$data->number}}</td>
      <td>{{$data->address}}</td>
      <td style="text-align: center;">
        <a href="{{ url('#') }}">
          <button type="button" class="btn btn-info">View</button>
        </a>
        <a href="{{ url('#') }}">
          <button type="button" class="btn btn-warning">Update</button>
        </a>
        <a href="{{route('admin.shop.delete',['shop_id'=> $data->id])}}">
          <button type="button" class="btn btn-danger">Delete</button>
        </a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

@endsection