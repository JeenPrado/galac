	@extends('layout.base')

	@section('content')
		<div class="container  text-center p-5 ">
		<h3> </h3>
			<div class="row justify-content-around  align-items-center ">
				<div class="col-4">
					<div class="card " style="width: 18rem;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"> {{$product->id}}</h5>
							<p class="card-text">{{$product->name}} is a device.</p>
							<p class="card-text">{{$product->price}}.</p>
							<p class="card-text">{{$product->description}}.</p>
							<p>
							<a href="{{ route('editar', ['id' => $product->id]) }}" class="btn btn-warning">Edit</a>
							<form action="{{ route('eliminar', ['id' => $product->id]) }}" method="POST" >
        						{{ csrf_field() }}
      							{{ method_field('DELETE') }}
        						<button class="btn btn-danger"> Delete</button>
      						</form>
							  </p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		


	@endsection