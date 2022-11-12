@extends('backend.master')


@section('content')
<div class="contain">
    <h1>Order List</h1>
    <a href="{{route('order.create')}}" class="btn btn-primary">Create New Order</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Order name</th>
      <th scope="col">Order number</th>
      <th scope="col">Order dater</th>


    </tr>
  </thead>
  <tbody>
    @foreach($ord as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->number}}</td>
      <td>{{$data->created_at}}</td>
      
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$ord->links()}}
</div>


@endsection