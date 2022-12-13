@extends('backend.master')

@section('content')
<p>{{ $order->customer_id }}</p>
<p>{{ $order->product_id }}</p>
<p>{{ $order->expected_delivery_date }}</p>
<p>{{ $order->product_price }}</p>
<p>{{ $order->shipping_price }}</p>
<p>{{ $order->total_price }}</p>
@endsection