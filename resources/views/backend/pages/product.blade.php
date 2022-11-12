@extends('backend.master')



@section('content')

    <h1>Product List</h1>
    <a href="{{route('product.create')}}" class="btn btn-primary" >Create New Product</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Product name</th>
      <th scope="col">Product id</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>food</td>
      <td>707</td>
      <td>870 BDT</td>
      <td></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


@endsection