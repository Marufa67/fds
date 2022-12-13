@extends('backend.master')

@section('content')
<div>
<h1>Add a Shop</h1>
</div>
<form action="{{route('shop.submit')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="" required>
    </div>
    <div class="form-group mb-3">
        <label for="description" class="form-label">Description:</label>

        <input type="text" name="description" id="description" class="form-control" placeholder="This is a beautiful product" required>

    </div>
    <div class="form-group mb-3">
        <label for="image" class="form-label">Upload Image:</label>
        <input type="file" id="image" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="form-group mb-3">
        <label for="phone_no" class="form-label">Phone Number:</label>
        <input type="text" id="phone_no" name="phone_no" class="form-control" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group mb-3">
        <label for="address" class="form-label">Address:</label>
        <input type="text" id="address" name="address" class="form-control"required>
    </div>
    <div class="form-group d-flex justify-content-center">
        <input type="submit" value="Submit" class="btn btn-primary m-2">
        {{-- <input type="reset" value="Reset" class="btn btn-primary m-2"> --}}
    </div>
</form>


@endsection