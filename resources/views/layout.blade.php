<!DOCTYPE html>
<head>

@yield('header')
 <title>codeAide</title>
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" >



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

 
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
							<a href="#">Bulletin</a>
						</li>
						<li>
							<a href="#">Projects</a>
						</li>
						<li>
							<a href="#">Solutions</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Username</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	</div>
</body>
</head>
<body>
@yield('content')
</body>
</html>