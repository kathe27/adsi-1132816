@extends('layout-app.base')

@section('title', 'Modificar Articulo')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Modificar Artículo</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{url('Article')}}">Lista Artículos</a></li>
				<li class="active">Modificar Artículo</li>
			</ul>
			
			@include('layout-app.errors')
		
			<hr>
			<form action="{{url('Article/'.$art->id)}}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					{!! csrf_field() !!}
					{{method_field('put')}}
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{$art->name}}"> 
				</div>
				<div class="form-group">
					<select class="form-control" name="category_id">
					@foreach($cats as $cat)
						{{-- Operador Ternario --}}
						{{-- condicion ? verdadero : falso --}}
						{{-- (5 > 10) ? 'Es Verdadero' : 'Es Falso' --}}
						<option value="{{ $cat->id}}" {{($art->category_id == $cat->id ? "selected": "") }}>{{$cat->name}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<input type="file" id="upload" name="image" accept="image/*" style="display: none">
					<button class="btn btn-default btn-upload" type="button">
						<i class="glyphicon glyphicon-picture"></i>Seleccionar Imagen
					</button>
				</div>
				<div class="form-group">
					<textarea type="text" name="content" class="form-control" placeholder="Contenido" >{{$art->content}}</textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						<i class="glyphicon glyphicon-send"></i>Modificar
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection