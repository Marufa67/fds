@extends('backend.master')

@section('content')

<h1>Delivery_man Total dispatched Order {{$deliveryManDispatchedOrder}}</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Product id</th>
            <th scope="col">Customer id</th>
            <th scope="col">Product price</th>
            <th scope="col">Total price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deliveryManDispatchedOrderDetails as $data)
        <tr>
            <td>{{ $data->product_id }}</td>
            <td>{{ $data->customer_id }}</td>
            <td>{{ $data->product_price }}</td>
            <td>{{ $data->total_price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection