@extends('layout-app.base')

@section('title', 'Lista de Categorias')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Lista de Categorías</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('category/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
			<hr>
			{!! csrf_field() !!}
				<input type="search" name="name" class="form-control" id="ncategory" placeholder="Buscar por Nombre Categoria" autocomplete="off">
			<hr>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span 
					aria-hidden="true">&times;</span></button>
						{!! html_entity_decode(session('status')) !!}
				</div>
			@endif
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
				@foreach($categories as $cat)
					<tr>
						<td>{{ $cat->id   }}</td>
						<td>{{ $cat->name }}</td>
						<td>
							<a class="btn btn-primary"  href="{{ url('category/'.$cat->id.'/edit')}}">
								<i class="glyphicon glyphicon-pencil"></i>
							</a>
							<form action="{{ url('category/'.$cat->id) }}" method="post" style="display: inline-block;">
								{{ method_field('delete') }}
								{!! csrf_field() !!}
								<button type="button" class="btn btn-danger btn-delete">
									<i class="glyphicon glyphicon-trash"></i>
								</button>

							</form>
						</td>
					</tr>
				@endforeach
				
			</table>	
		</div>	
	</div>

@endsection