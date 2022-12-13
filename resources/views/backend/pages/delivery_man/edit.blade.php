@extends('backend.master')


@section('content')
<form action="{{route('delivery_man.update',$delivery_man->id)}}" method="post" enctype="multipart/form-data">

    @method('put')
    @csrf
<div class="form-group">
        <label for="name">Enter your name</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

    </div>
    <div class="form-group">
        <label for="number">Enter your number</label>
        <input name="number" type="text" class="form-control" id="exampleInputPassword1" placeholder="number">
    </div>
   
    <div class="form-group">
        <label for="image">Upload image</label>
        <input name ="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
    <div class="form-group">
        <label for="name">Area</label>
        <input name="area" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
    <div class="form-group ">
        <label for="stock_status" class="form-label"> Status</label>
        <select name="status" id="stock_status" class="form-control">
            <option value="Active" default>Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection