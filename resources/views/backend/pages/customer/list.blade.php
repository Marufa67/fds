@extends('backend.master')
@section('content')
    <div class="mt-3">
        <h1 class="float-start">List of Customers</h1>
    </div>
    <table class="table">
        {{-- @dd($customer) --}}
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->first_name }}</td>
                    <td>{{ $data->last_name }}</td>
                    <td>{{ $data->contact_number }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->password }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('customer.address.list') }}">
                            <button type="button" class="btn btn-primary">Address</button>
                        </a>
                    </td>
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
    {{ $customer->links() }}
@endsection