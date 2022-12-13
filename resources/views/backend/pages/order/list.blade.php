@extends('backend.master')
@section('content')
<div>
<h1>List of Orders</h1>
<a class="btn btn-primary" href="{{route('order.create')}}">Create new order</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Product ID</th>
            <th scope="col">Expected Delivery Date</th>
            <th scope="col">Product Price</th>
            <th scope="col">Shipping Price</th>
            <th scope="col">Total Price</th>
            <th scope="col" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($orders as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->customer_id }}</td>
            <td>{{ $data->product_id }}</td>
            <td>{{ $data->expected_delivery_date }}</td>
            <td>{{ $data->product_price }}</td>
            <td>{{ $data->shipping_price }}</td>
            <td>{{ $data->total_price }}</td>
            <td style="text-align: center;">
                <a href="{{route('admin.order.view', $data->id)}}">
                    <button type="button" class="btn btn-info">View</button>
                </a>
                <a href="{{route('order.edit',['order_id'=>$data->id])}}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
                <a href="{{route('admin.order.delete',['order_id'=> $data->id])}}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection