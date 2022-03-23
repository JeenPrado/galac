@extends('layout.base')

@section('content')

@if(count($errors) > 0)
<div class="alert alertt-danger "> 
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

  <h1  class="text-center">Registro de Producto</h1>
   <div class="container ">
       <form action="{{route('guardar')}}" method="POST" class="form-inline form-control">
           {{csrf_field()}}
            <div class="mb-3 form-inline">
                <label for="name" class="form-label">Name </label>
                <input type="text"  class="form-control" name="name" id="name" value="{{old('name')}}">
            </div>
            <div class="mb-3 form-inline ">
                <label for="id" class="form-label">Cod </label>
                <input type="text"  class="form-control" name="cod" id="cod" value="{{old('cod')}}">
            </div>
            <div class=" mb-3 form-inline ">
                <label for="type" class="form-label">Type </label>
                <input type="text"  class="form-control" id="type" name="type" value="{{old('type')}}">
            </div>
            <div class=" mb-3 form-inline">
                <label for="price" class="form-label">Price </label>
                <input type="text"  class="form-control" name="price" id="price" value="{{old('price')}}">
            </div>
            <div class=" mb-3 form-inline">
                <label for="price" class="form-label">Quantity </label>
                <input type="text"  class="form-control" name="quantity" id="quantity" value="{{old('quantity')}}">
            </div>
            <div class="form-text"> Este es un texto de ayuda agregado con un div y la clase form-text</div>
            
            
            
            <div class=" mb-3">
                <button type="submit " class="btn btn-success">Register</button>
            </div>
       </form>
    </div>


@endsection