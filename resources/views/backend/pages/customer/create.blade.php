@extends('backend.master')


@section('content')

<form action= "{{route('customer.submit')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Id</label>
    <input type="text" class="form-control" name="id">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Number</label>
    <input type="text" class="form-control" name="number">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection