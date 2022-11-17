@extends('backend.master')
@section('content')
<h1>Add a Product</h1>
<form action="{{route('product.store')}}" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="category_id" class="form-label" style="color: red;">Category ID:</label>
        <input type="number" name="category_id" id="category_id" class="form-control" placeholder="101" required>
    </div>
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Teach Yourself Web Development" required>
    </div>
    <div class="form-group mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="This is a beautiful product">
    </div>
    <div class="form-group mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" id="image" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif">
    </div>
    <div class="form-group mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="number" id="price" name="price" class="form-control" step="any" placeholder="BDT 500" required>
    </div>
    <div class="form-group mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" min="1" max="20" name="stock" id="stock" class="form-control" placeholder="3" required>
    </div>
    <div class="form-group mb-3">
        <label for="stock_status" class="form-label">Stock Status:</label>
        <select name="stock_status" id="stock_status" class="form-control">
            <option value="Available" default>Availabe</option>
            <option value="Not Availabe">Not Available</option>
        </select>
    </div>
    <div class="form-group d-flex justify-content-center">
        <input type="submit" value="Submit" class="btn btn-primary m-2">
        <input type="reset" value="Reset" class="btn btn-primary m-2">
    </div>
</form>
@endsection