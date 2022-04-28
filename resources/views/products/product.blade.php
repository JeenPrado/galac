@extends('layouts.app')

	@section('content')
		<div class="container-fluid   p-5 text-center  ">
		<h3> </h3>
			<div class="row   p-5  align-items-center ">
				
				<div class="">
					<div class="card textcenter " style="display: flex; flex-direction: column;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"> {{$product->id}}</h5>
							<p class="card-text">{{$product->name}}.</p>
							<p class="card-text">{{$product->price}} $.</p>
							<p class="card-text">{{$product->category->description}}.</p>
							<p>	
						</div>	
						<div class="card-footer">
							<table class="table"> 
								<tr class=" ">
									<th> <a href="{{ route('editar', ['id' => $product->id]) }}" class="btn btn-warning">Edit</a> 		
									</th> 
									<th>
										<form action="{{ route('eliminar', ['id' => $product->id]) }}" method="POST" >
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger"> Delete</button>
										</form>
									</th> 
									<th><a href="{{ route('listar')}}" class="btn btn-primary ">Volver</a></th>
								</tr>
							</table>
						
					</div>
					</div>
				</div>				
			</div>

			

		</div>
		


	@endsection