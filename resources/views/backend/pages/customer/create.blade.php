@extends('backend.master')

@section('content')
<div>
  <h1>Add a Customer</h1>
</div>
<form action="{{route('customer.submit')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Enter your name</label>
    <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="number">Enter your number</label>
    <input name="number" type="text" class="form-control" id="number" placeholder="Enter number">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" class="form-control" id="address" placeholder="Enter address">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection