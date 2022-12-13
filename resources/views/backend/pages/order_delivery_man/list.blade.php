@extends('backend.master')


@section('content')
<div>
<h1>List of Order_Delivery man</h1>
<a class="btn btn-primary" href="{{route('order_delivery_man.create')}}">Add Oder_delivery man</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection