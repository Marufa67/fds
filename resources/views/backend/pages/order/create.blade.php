@extends('backend.master')

@section('content')
<div>
  <h1>Create new order</h1>
</div>

@if($errors->any())
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif

<form action="{{route('order.submit')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Customers</label>
    <select name="customer_id" id="" class="form-control">
      @foreach($customers as $customer)
      <option value="{{$customer->id}}">{{$customer->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Products</label>
    <select name="product_id" id="" class="form-control">
      @foreach($products as $product)
      <option value="{{$product->id}}">{{$product->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Delivery Men</label>
    <select name="delivery_man_id" id="" class="form-control">
      @foreach($delivery_men as $delivery_man)
      <option value="{{$delivery_man->id}}">{{$delivery_man->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Expected Delivery Date</label>
    <input name="expected_delivery_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="Delivery date">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Price:</label>
    <input name="product_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Product price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Shipping Price:</label>
    <input name="shipping_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="shipping price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total Price:</label>
    <input name="total_price" type="text" class="form-control" id="exampleInputPassword1" placeholder="total price">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection