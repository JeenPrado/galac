@extends('layout.base')

@section('content')

  <h1  class="text-center">Registro de Producto</h1>
   <div class="container ">
       <form action="{{route('store_product')}}" method="POST" class="form-inline form-control">
            <div class="mb-3 form-inline">
                <label for="Nombre" class="form-label">Name </label>
                <input type="text"  class="form-control" id="nombre">
            </div>
            <div class="mb-3 form-inline ">
                <label for="Apellido" class="form-label">ID </label>
                <input type="text"  class="form-control" id="id">
            </div>
            <div class=" mb-3 form-inline ">
                <label for="email" class="form-label">Type </label>
                <input type="email"  class="form-control" id="tipo">
            </div>
            <div class=" mb-3 form-inline">
                <label for="pass" class="form-label">Price </label>
                <input type="password"  class="form-control" id="precio">
            </div>
            <div class="form-text"> Este es un texto de ayuda agregado con un div y la clase form-text</div>
            
            <div class=" mb-3 form-check-inline">
                <label for="pass" class="form-check-label">Exempt </label>
                <input type="checkbox"  class="form-check-input" id="pass">
            </div>
            
            <div class=" mb-3">
                <button type="submit " class="btn btn-success">Register</button>
            </div>
       </form>
    </div>


@endsection