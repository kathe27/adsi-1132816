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
			<form action="{{url('Article/'.$art->id)}}" method="post" enctype="multipart/form-data">
				<div class="form-group">
					{!! csrf_field() !!}
					{{method_field('put')}}
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{$art->name}}"> 
				</div>
				<div class="form-group">
					<input type="file" name="image" accept="image/*">
				</div>
				<div class="form-group">
					<textarea type="text" name="content" class="form-control" placeholder="Contenido" >{{$art->content}}</textarea>
				</div>
				<div class="form-group">
					<select class="form-control" name="category_id">
					@foreach($cats as $cat)
						<option value="{{ $cat->id}}" @if($cat->id == $art->category_id) selected
												}
							@endif>{{$cat->name}}</option>
					@endforeach
					</select>
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