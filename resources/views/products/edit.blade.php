@extends('layout.base')

@section('content')


  <h1  class="text-center">Editar Producto {{ $product->id }}</h1>
   <div class="container ">
       <form action=" {{ route('update_product', ['id' => $product->id]) }} " method="POST" class="form-inline form-control">
       {{csrf_field()}}
       {{ method_field('PUT') }}
            <div class="mb-3 form-inline">
                <label for="Nombre" class="form-label">Name </label>
                <input type="text"  class="form-control" name="name"  id="name" value="{{$product->name}}">
            </div>
            <div class=" mb-3 form-inline ">
                <label for="type" class="form-label">Type </label>
                <input type="text"  class="form-control" name="description" value="{{$product->description}}">
            </div>
            <div class=" mb-3 form-inline">
                <label for="category_id" class="form-label">Category </label>
                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                    
                    <option value="{{$category->id}}">{{$category->description}}</option>
                    @endforeach
                
                </select>
            </div>
            <div class=" mb-3 form-inline">
                <label for="price" class="form-label">Price</label>
                <input type="number"  class="form-control" name="price" id="price" value="{{$product->price}}">
            </div>
            <div class=" mb-3 form-inline">
                <label for="price" class="form-label">Quantity </label>
                <input type="number"  class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
            </div>
            <div class="form-text"> Este es un texto de ayuda agregado con un div y la clase form-text</div>               
            <div class=" mb-3">
                <button type="submit " class="btn btn-success">Edit product</button>
            </div>
       </form>
    </div>


@endsection