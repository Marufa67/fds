@extends('backend.master')

@section('content')

<h1>Category List</h1>


<a href="{{route('category.create')}}" class="btn btn-success">
    Create New Category
</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Category Name</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>


        @foreach($cats as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>
                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="category_image">
            </td>
            <td>{{$data->name}}</td>
            <td>{{$data->status}}</td>
            <td>
                <a href="{{route('admin.category.view',['category_id'=> $data->id])}}" class="btn btn-primary">View</a>

                <a href="{{route('admin.category.delete',['category_id'=> $data->id])}}" >
                <button type="button" class="btn btn-danger">Delete</button>
            </a>

                <a href="" class="btn btn-warning">Edit</a>

            </td>

        </tr>
        @endforeach


    </tbody>
    
</table>
{{$cats->links()}}


@endsection