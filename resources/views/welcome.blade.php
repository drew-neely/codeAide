@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<div class="row">
		<div class="col-md-6">
			<h3>Projects</h3>
			
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">One</li>
							<li class="list-group-item">Two</li>
							<li class="list-group-item">Three</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-6">
			<h3>Solutions</h3>
			
			<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse2">Collapsible list group</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">One</li>
							<li class="list-group-item">Two</li>
							<li class="list-group-item">Three</li>
						</ul>
						<div class="panel-footer">Footer</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</head>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
	</html>
	@stop
