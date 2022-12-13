@extends('backend.master')

@section('content')
<div>
    <h1>Add Order_Delivery Man</h1>
</div>
<form action="{{route('order_delivery_man.submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Order Name:</label>
<select name="delivery_man_id" id="" class="form-control">
@foreach($categories as $data)    
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach

<form>
  <div class="form-group">
    <label for="order_id">Order</label>
    <input name="name" type="text" class="form-control" id="order_id" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="name">Delivery_man</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection