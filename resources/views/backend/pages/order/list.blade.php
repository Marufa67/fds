@extends('backend.master')
@section('content')

<h1>List of Orders</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Product ID</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Expected Delivery Date</th>
            <th scope="col">Product Price</th>
            <th scope="col">Shipping Price</th>
            <th scope="col">Total Price</th>
            <th scope="col" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;">
                <a href="{{ url('') }}">
                    <button type="button" class="btn btn-info">View</button>
                </a>
                <a href="{{ url('') }}">
                    <button type="button" class="btn btn-warning">Update</button>
                </a>
                <a href="{{ url('') }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    </tbody>
</table>

@endsection