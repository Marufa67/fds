@extends('backend.master')
@section('content')
    <div class="mt-3">
        <h1 class="float-start">List of Customers</h1>
        <a class="btn btn-primary" href="{{route('customer.create')}}">Add Customer</a>
    </div>
    <table class="table">
        {{-- @dd($customer) --}}
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">number</th>
                <th scope="col">address</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->number }}</td>
                    <td>{{ $data->address }}</td>

                    <td style="text-align: center;">
                        <a href="{{ route('customer.create') }}">
                            <button type="button" class="btn btn-primary">Address</button>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <a href="{{route('admin.customer.view',['customer_id'=> $data->id])}}">
                            <button type="button" class="btn btn-info">View</button>
                        </a>
                        <a href="{{ url('') }}">
                            <button type="button" class="btn btn-warning">Update</button>
                        </a>
                        <a href="{{route('admin.customer.delete',['customer_id'=> $data->id])}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $customer->links() }}
@endsection