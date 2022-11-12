@extends('backend.master')


@section('content')

<h1>Create New order</h1>
<div class="container">
    <form action="{{route('order.create.submit')}}" method="post">
    @if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-success">{{$message}}</p>
            @endforeach
        @endif

        @csrf
        <div class="mb-3">
            <label for="orderName" class="form-label">Order Name</label>
            <input required type="text" class="form-control" name="orderName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="ordernumber" class="form-label">Order Number</label>
            <input type="text" class="form-control" name="orderNumber" aria-describedby="emailHelp">
    
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection