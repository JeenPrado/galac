@extends('layout.base')

@section('content')

  <h1  class="text-center">Editar Producto</h1>
   <div class="container ">
       <form action=" " class="form-inline form-control">
            <div class="mb-3 form-inline">
                <label for="Nombre" class="form-label">Name </label>
                <input type="text"  class="form-control" id="nombre">
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
            <div class=" mb-3">
                <button type="submit " class="btn btn-success">Modify</button>
            </div>
       </form>
    </div>


@endsection