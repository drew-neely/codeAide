<!DOCTYPE html>
<head>


	@yield('header')
	<title>codeAide</title>
	<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" >



	<title>codeAide</title>


	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default navbar-inverse" role="navigation">
						<div class="navbar-header">
							
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="/">codeAide</a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="http://localhost:8000/bulletin">Bulletin</a>
								</li>
								<li>
									<a href="http://localhost:8000/indivproject/2">My Projects</a>
								</li>
								<li>
									<a href="http://localhost:8000/submissions/001">My Solutions</a>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<!-- Authentication Links -->
								@if (Auth::guest())
								<li><a href="{{ url('/login') }}">Login</a></li>
								<li><a href="{{ url('/register') }}">Register</a></li>
								@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
									</ul>
								</li>
								@endif
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>

		@yield('content')


		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/scripts.js"></script>

	</body>
	</html>
