@extends('backend.master')


@section('content')
<div>
<h1>List of Delivery man</h1>
<a class="btn btn-primary" href="{{route('delivery_man.create')}}">Add delivery man</a>
</div>

<table class="table">
  <thead>
    <tr>

      <th scope="col">name</th>
      <th scope="col">number</th>
      <th scope="col">area</th>
      <th scope="col">image</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($delivery_man as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->number}}</td>
      <td>{{$data->area}}</td>
      <td>
        <img src="{{url('uploads/',$data->image)}}" alt="">
      </td>
      <td>{{$data->status}}</td>
                    <td style="text-align: center;">
                        <a href="{{route('admin.delivery_man.view',['delivery_man_id' => $data->id])}}">
                            <button type="button" class="btn btn-info">View</button>
                        </a>
                        <a href="{{route('delivery_man.edit',['delivery_man_id'=> $data->id])}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{route('admin.delivery_man.delete',['delivery_man_id'=> $data->id])}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $delivery_man->links() }}

@endsection