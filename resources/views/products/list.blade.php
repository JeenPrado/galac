@extends('layouts.app')

@section('content')
<h1 class="text-center text-bold">Listado de productos</h1>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
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
      <td> {{$product->category->description}} </td>
      <td> {{$product->quantity}} </td>
      <td><a href="{{ route('producto', ['cod' => $product->id]) }}" class="btn btn-success">  Show </a> </td>
      <td><a href="{{route('editar', ['id' => $product->id ]) }}" class="btn btn-info"> Edit </a></td>
      <td><form action="{{ route('eliminar', ['id' => $product->id]) }}" method="POST" >
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger"> Delete</button>
      </form></td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection