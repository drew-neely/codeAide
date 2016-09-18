@extends('layout')

@section('content')

<body>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			
			
			<div class="form-group" align="center">
				<h4>Title</h4>
				<textarea name="title" class="form-control"></textarea>
			</div>

			<div class="form-group" align="center">
				<h4>Best Solution Award</h4>
				<textarea name="title" class="form-control"></textarea>
			</div>

			<div class="form-group" align="center">
				<h4>Solution Budget</h4>
				<textarea name="title" class="form-control"></textarea>
			</div>

		</div>
		<div class="col-md-8">
			
			

			<div class="form-group" align="center">
				<h4>Description</h4>
				<textarea name="title" class="form-big"></textarea>
			</div>

			<div class="form-group" align="center">
				<h4>Test Cases</h4>
				<textarea name="title" class="form-big"></textarea>
			</div>
		</div>
	</div>
	<div class="col-md-12">
	<center>	
	<button type="submit" class="btn btn-primary">Post Project</button>
	</center>
	</div>
</div>




</head>
</body>

@stop
