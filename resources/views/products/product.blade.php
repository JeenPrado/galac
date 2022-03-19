	@extends('layout.base')

	@section('content')

	

	
		<div class="container text-center p-5 ">
		<h3>Ruta de producto </h3>
			<div class="row p-3">
				<div class="col">
					<div class="card " style="width: 18rem;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"> {{$product->id}}</h5>
							<p class="card-text">{{$product->name}} is a device.</p>
							<p class="card-text">{{$product->price}}.</p>
							<p class="card-text">{{$product->description}}.</p>
							<a href="{{route('modificar')}}" class="btn btn-warning">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		


	@endsection