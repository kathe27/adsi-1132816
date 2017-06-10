@extends('layout-app.base')

@section('title', 'Listar Articulos')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Listar Articulos</h1>
			<hr>

			<ul class="breadcrumb">
				<li><a href="{{url('Article')}}">Lista Articulos</a></li>
				<li class="active">Consultar Artículo</li>
			</ul>
			<hr>
			<table class="table table-striped">
			  			<tr>
			  				<th>Nombre:</th>
			  				<td>{{ $article->name }}</td>
			  			</tr>
			  			<tr>
			  				<th>Categoría:</th>
			  				<td>{{ $article->category->name }}</td>
			  			</tr>
			  			<tr>
			  				<th>Imagen:</th>
			  				<td><img src="{{ asset($article->image) }}" width="240"></td>
			  			</tr>
			  			<tr>
			  				<th>Contenido:</th>
			  				<td>{{ $article->content }}</td>
			  			</tr>
			  			
			  		</table>	
		</div>	
	</div>


@endsection