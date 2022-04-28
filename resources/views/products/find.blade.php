@extends('layouts.app')

@section('content')

<form action="{{ route('mostrar')}} " class="form-inline form-control"  method="POST">
{{ csrf_field() }}    
<div class="mb-3 form-inline">
        <label for="Nombre" class="form-label">Name </label>
        <input type="text"  class="form-control" name="name" id="name">
    </div>
    <div class=" mb-3">
      
            <button type="submit " class="btn btn-info">Find</button>
      
    </div>
</form>
@endsection