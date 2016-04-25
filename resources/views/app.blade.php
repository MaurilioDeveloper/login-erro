<?php $tituloProjeto = "Plano de Ação"; ?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>{{$tituloProjeto}}</title>
        @if(Config::get('app.debug'))
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>        
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href="{{asset('build/css/estilo.css')}}" rel="stylesheet" />
        <!-- Optional theme -->

        @else
        <link href="{{elixir('css/all.css')}}" rel="stylesheet"/>
        @endif

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <div class="blue">
    <nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand white ho" href="#">&nbsp;&nbsp;&nbsp;Plano De Ação Estratégica</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				

				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						@if(!Request::is('auth/login'))
                                                <li><a href="{{ url('/#/login') }}" class="white">Login</a></li>
						@endif
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
        </div>

    <div ng-view></div>

	<!-- Scripts -->
	@if(Config::get('app.debug'))
            <script src="{{asset('build/js/vendor/jquery.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-route.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-resource.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-animate.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-messages.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/ui-bootstrap.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/navbar.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-cookies.min.js')}}"></script>
            <script src="{{asset('build/js/vendor/query-string.js')}}"></script>
            <script src="{{asset('build/js/vendor/angular-oauth2.min.js')}}"></script>
            <script src="{{asset('build/js/app.js')}}"></script>
            
            <!-- CONTROLLERS -->
            <script src="{{asset('build/js/controllers/home.js')}}"></script>
            <script src="{{asset('build/js/controllers/login.js')}}"></script>
            <script src="{{asset('build/js/controllers/client/clientList.js')}}"></script>
            
            <!-- SERVICES -->
            <script src="{{asset('build/js/services/client.js')}}"></script>
            
        @else
            <script src="{{elixir('js/all.js')}}"></script>
        @endif
</body>
</html>