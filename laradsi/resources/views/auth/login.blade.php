@extends('layout-app.welcome')

@section('title', 'Ingreso de Usuarios')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <small>@lang('login.lang')</small>
            <a class="btn btn-info btn-xs" href="{{url('login/en')}}">English</a>
            <a class="btn btn-info btn-xs" href="{{url('login/es')}}">Español</a>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">@lang('login.title')</div>
                <div class="panel-body">

                @include('layout-app.errors')

                    <form class="form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo Electronico">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">@lang('login.button')</button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                @lang('login.forgot')
                            </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
@endsection
