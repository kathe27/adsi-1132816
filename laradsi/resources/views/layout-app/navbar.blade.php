<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarclp">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@if(Auth::guest())
					<a href="{{url('/')}}" class="navbar-brand">LARADSI</a>
				@else
					<a href="{{url('home')}}" class="navbar-brand">LARADSI</a>
				@endif
			</div>
			<div class="collapse navbar-collapse" id="navbarclp">
				@if(Auth::check())
					<ul class="nav navbar-nav navbar-left">
						<li @if(session('section') == 'category') class="active" @endif>
							<a href="{{url('category')}}">Categorías</a>
						</li>
						<li @if(session('section') == 'article') class="active" @endif>
							<a href="{{url('Article')}}">Artículos</a>
						</li>
					</ul>
				@endif

				<ul class="nav navbar-nav navbar-right">
				@if(Auth::check())
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();"><i class="glyphicon glyphicon-remove"></i>Cerrar Sesion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                     </li>
					@else
						<li><a href="{{url('login')}}"><i class="glyphicon glyphicon-user"></i>Iniciar Sesion</a></li>
						<li><a href="{{url('register')}}"><i class="glyphicon glyphicon-list"></i>Registrarse</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>