@extends('backend.master')
@section('content')
<div>
    <h1>Products Table</h1>
    @if(session()->has('message'))
     <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
    @if(session()->has('error'))
        <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

 
    <a href="{{route('product.create')}}">
    
        <button type="button" class="btn btn-success">Add Product</button>
    </a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Stock Status</th>
            <th scope="col" style="text-align:center;">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($products as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->category_id}}</td>

            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>
            <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="product_image">
            </td>
            <td>{{$data->price}} BDT</td>
            <td>{{$data->stock}}</td>
            <td>{{$data->status}}</td>
            <td style="text-align: center;">
                <a href="{{route('admin.product.view',['product_id' => $data->id])}}">
                    <button type="button" class="btn btn-info">View</button>
                </a>
                <a href="{{route('product.edit',['product_id'=>$data->id])}}">
                    <button type="button" class="btn btn-warning">Edit</button>
                </a>
                <a href="{{route('admin.product.delete',['product_id'=> $data->id])}}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

{{$products->links()}}


@endsection