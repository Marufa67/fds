@extends('backend.master')


@section('content')
<div class="contain">
    <h1>Customer List</h1>
  <a  class = "btn btn-primary" href="{{route('customer.create')}}">New Customer Create</a>

<table class="table">
 {{--@dd($cats)--}}
  <thead>
    <tr>
     
      <th scope="col">Customer name</th>
      <th scope="col">Customer id</th>
      <th scope="col">Customer adress</th>
      <th scope="col">Customer number</th>

    </tr>
  </thead>
  <tbody>
    @foreach($cats as $data)
    <tr>
      <td>{[$data->name]}</td>
      <td>{[$data->id]}</td>
      <td>{[$data->address]}</td>
      <td>{[$datadata->number]}</td>
    
    </tr>
    @endforeach
  </tbody>
  {{$cats->links}}
</table>
</div>


@endsection