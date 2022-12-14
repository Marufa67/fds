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

@php
$date=date('Y-m-d',strtotime($data->created_at));
$hour=date('h',strtotime($data->created_at));
$minutes=date('i',strtotime($data->created_at));
$seconds=date('s',strtotime($data->created_at));
$key=$key;
@endphp

<div id="timer{{$key}}">
          

   
          </div>

<script type="text/javascript">

//task: get timer details from the previous section and assign them to variables. 
//tip, these are associative arrays accessed as $myArray['data'] 

const countDownDate = <?php 

 echo strtotime("$date $hour:$minutes:$seconds" ) ?> * 1000;

let timeNow = <?php print(time()) ?> * 1000;
let key = <?php echo $key ?>;
let id="timer"+key;
alert(id);
// Every second, the countdown will be updated.

let i = setInterval(function() {

timeNow = timeNow + 1000;

// Calculate the time between now and the end of the countdown.  

let dist = countDownDate - timeNow;

// Calculate the number of days, hours, minutes, and seconds in days, hours, minutes, and seconds.

let numOfDays = Math.floor(dist / (1000 * 60 * 60 * 24));

let hr = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

let min = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));

let sec = Math.floor((dist % (1000 * 60)) / 1000);


// Put the result in an element with the id="timer" attribute.  


document.getElementById(id).innerHTML = numOfDays + "d " + hr + "h " +

min + "m " + sec + "s ";

// When the countdown is over, type some text. 

// if (dist < 0) {

// clearInterval(i);

// document.getElementById("timer").innerHTML = "TIMER EXPIRED";

// }

}, 1000);

</script>



        
  
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


@endsection