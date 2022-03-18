@extends('layout.base')

@section('content')

<form action="" class="form-inline form-control">
    <div class="mb-3 form-inline">
        <label for="Nombre" class="form-label">Nombre </label>
        <input type="text"  class="form-control" id="nombre">
    </div>
    <div class=" mb-3">
        <button type="submit " class="btn btn-success">Find</button>
    </div>
</form>
@endsection