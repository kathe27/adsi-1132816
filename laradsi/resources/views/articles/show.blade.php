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
			<table class="table table-hover">
			  			<tr>
			  				<th>ID:</th>
			  				<td>{{ $article->id }}</td>
			  			</tr>
			  			<tr>
			  				<th>Titulo:</th>
			  				<td>{{ $article->name }}</td>
			  			</tr>
			  			<tr>
			  				<th>Contenido:</th>
			  				<td>{{ $article->content }}</td>
			  			</tr>
			  			<tr>
			  				<th>Categoria:</th>
			  				<td>{{ $article->category->name }}</td>
			  			</tr>
			  			<tr>
			  				<th>Imagen:</th>
			  				<td><img src="{{ asset($article->image) }}" width="250"  alt=""></td>
			  			</tr>
			  		</table>	
		</div>	
	</div>


@endsection