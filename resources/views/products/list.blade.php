@extends('layout.base')

@section('content')
<h1 class="text-center text-bold">Listado de productos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> <a href="{{route('producto')}}"> Ver </a> </td>
      <td><a href="{{route('modificar')}}"> Modificar </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td> </td>
      <td> <a href="{{route('producto')}}"> Ver </a></td>
      <td><a href="{{route('modificar')}}"> Modificar </a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"></td>
      <td></td>
      <td> </td>
      <td> <a href="{{route('producto')}}"> Ver </a></td>
      <td><a href="{{route('modificar')}}"> Modificar </a></td>
    </tr>
  </tbody>
</table>

@endsection