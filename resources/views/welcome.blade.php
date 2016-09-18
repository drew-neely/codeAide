@extends('layout')

@section('content')

<body>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>Projects</h3>
			
			<div class="panel-group">
			@foreach($userProjects as $p)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1">{{ $p->title }}</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item"> {{ $p->description }}</li>
						</ul>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

	</head>
	
	</body>

	@stop
