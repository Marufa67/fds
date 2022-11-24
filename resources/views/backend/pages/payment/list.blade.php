@extends('backend.master')
@section('content')
    <div class="mt-3">
        <h1 >List of Payments</h1>
    </div>
    <table class="table">
        {{-- @dd($payment) --}}
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col" >Order ID</th>
                <th scope="col" >Customer ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Type</th>
                <th scope="col">Provider</th>
                <th scope="col">Account Number</th>
                <th scope="col">Expiry Date</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payment as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->order_id }}</td>
                    <td>{{ $data->customer_id }}</td>
                    <td>{{ $data->amount }}</td>
                    <td>{{ $data->payment_type }}</td>
                    <td>{{ $data->provider }}</td>
                    <td>{{ $data->account_number }}</td>
                    <td>{{ $data->expiry_date }}</td>
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
            @endforeach
        </tbody>
    </table>
@endsection