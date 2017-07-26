@extends('layout-app.welcome')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4>Formulario de Registro</h4>
                </div>
                <div class="panel-body">

                    @include('layout-app.errors')

                    <form class="form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo">
                        </div>

                        <div class="form-group">
                             <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
