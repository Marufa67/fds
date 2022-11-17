@extends('backend.master')

@section('content')
<h1>Shop list</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Shop name</th>
      <th scope="col">Shop id</th>
      <th scope="col">Shop adress</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
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

@endsection