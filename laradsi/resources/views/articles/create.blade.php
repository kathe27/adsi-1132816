@extends('layout-app.base')

@section('title', 'Adicionar Articulo')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Adicionar Artículo</h1>
			<hr>
			<ul class="breadcrumb">
				<li><a href="{{url('Article')}}">Lista Artículos</a></li>
				<li class="active">Adicionar Artículo</li>
			</ul>

			@if(count($errors) > 0)
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span 
					aria-hidden="true">&times;</span></button>
					@foreach($errors->all() as $message)
						{{$message}}
					@endforeach
				</div>
			@endif
		
			<hr>
			<form action="{{url('Article')}}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					{!! csrf_field() !!}
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{old('name')}}"> 
				</div>
				<div class="form-group">
					<select class="form-control" name="category_id">
					@foreach($cats as $cat)
						{{-- Operador Ternario --}}
						{{-- condicion ? verdadero : falso --}}
						{{-- (5 > 10) ? 'Es Verdadero' : 'Es Falso' --}}
						<option value="{{$cat->id}}" {{(old("category_id") == $cat->id ? "selected": "")}}>{{$cat->name}}</option>
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
					<textarea type="text" name="content" class="form-control" placeholder="Contenido">{{old('content')}}</textarea>
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