@extends('backend.master')

@section('content')
<form action="{{route('order.update',$order->id)}}" method="post" enctype="multipart/form-data">

    @method('put')
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Customer</label>
        <select name="customer_id" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            @foreach($customers as $customer)
            <option value="{{$customer->name}}">{{$customer->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Product</label>
        <select name="product_id" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            @foreach($products as $product)
            <option value="{{$product->name}}">{{$product->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Delivery man</label>
        <select name="delivery_man_id" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
            @foreach($delivery_men as $delivery_man)
            <option value="{{$delivery_man->name}}">{{$delivery_man->name}}</option>
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