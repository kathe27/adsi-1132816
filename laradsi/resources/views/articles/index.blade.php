@extends('layout-app.base')

@section('title', 'Lista de Articulos')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center">Lista de Articulos</h1>
			<hr>
			<a class="btn btn-success" href="{{ url('Article/create') }}">
				<i class="glyphicon glyphicon-plus"></i> Adicionar
			</a>
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
					<th>Categoría</th>
					<th>Acciones</th>
				</tr>
				@foreach($articles as $art)
					<tr>
						<td>{{ $art->id   }}</td>
						<td>{{ $art->name }}</td>
						<td>{{ $art->category->name }}</td>
						<td>
							<a class="btn btn-primary"  href="{{ url('Article/'.$art->id)}}">
								<i class="glyphicon glyphicon-search"></i>
							</a>
							<a class="btn btn-success"  href="{{ url('Article/'.$art->id.'/edit')}}">
								<i class="glyphicon glyphicon-pencil"></i>
							</a>
							<form action="{{ url('Article/'.$art->id) }}" method="post" style="display: inline-block;">
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