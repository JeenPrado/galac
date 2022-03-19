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
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)

    <tr>
      <th scope="row">{{$product->cod}}</th>
      <td>{{$product->name}}</td>
      <td> {{$product->description}}</td>
      <td> {{$product->price}}</td>
      <td> {{$product->quantity}} </td>
      <td><a href="{{ route('producto', ['cod' => $product->id]) }}"> Ver </a> </td>
      <td><a href="{{route('modificar')}}"> Modificar </a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection