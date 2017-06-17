@extends('layout-app.base')

@section('title', 'Adicionar Categoría')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Adicionar Categoría</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{url('category')}}">Lista Categorías</a></li>
				<li class="active">Adicionar Categoría</li>
			</ul>

			@include('layout-app.errors')
		
			<hr>
			<form action="{{url('category')}}" method="post">
				<div class="form-group">
					{!! csrf_field() !!}
					<input type="text" name="name" class="form-control" placeholder="Nombre"> 
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="glyphicon glyphicon-send"></i>Guardar
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection