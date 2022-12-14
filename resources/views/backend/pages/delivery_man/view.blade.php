@extends('backend.master')

@section('content')

<h1>Delivery_man Total dispatched Order {{$deliveryManDispatchedOrder}}</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Customer</th>
            <th scope="col">Product price</th>
            <th scope="col">Total price</th>
            <th scope="col">Remaining Time</th>
            <th scope="col">dispatched</th>
        </tr>
    </thead>
    <tbody>
       @if($deliveryManDispatchedOrderDetails)
       @foreach ($deliveryManDispatchedOrderDetails as $key=>$data)
        <tr>
            <td>{{ $data->product->name }}</td>
            <td>
                @if($data->customer)
                {{ $data->customer->name }}
                @endif
            </td>
            <td>{{ $data->product_price }}</td>

            <td>{{ $data->total_price }}</td>
            <td>
                <div data-countdown="{{ $data->expected_delivery_date}}"></div>

            </td>
            <td>
                @if($data->status == 'dispatched')

                <a href="" class="btn btn-success">Dispatched</a>
                @else
                <a href="{{route('admin.viewDeliveryUpdateOrderStatus',$data->id)}}" class="btn btn-primary">isDispatch</a>
                @endif
            </td>
        </tr>
        @endforeach
       @endif
    </tbody>
</table>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/gh/hilios/jQuery.countdown@2.2.0/dist/jquery.countdown.min.js"></script>
<script type="text/javascript">
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('%D days %H Hours %M Min %S Sec'));
        });
    });
</script>

@endsection

