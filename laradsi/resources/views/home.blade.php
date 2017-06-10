@extends('layout-app.welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Escritorio "Administrador"</h4></div>

                <div class="panel-body">

                <ul class="list-group">
                    <li class="list-group-item">
                    <span class="badge">{{$ccats}}</span>
                    <a href="{{url('category')}}">Categorías</a>
                    </li>
                    <li class="list-group-item">
                    <span class="badge">{{$carts}}</span>
                    <a href="{{url('Article')}}">Artículos</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
