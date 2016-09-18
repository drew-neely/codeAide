@extends('layout')


@section('content')
<!DOCTYPE html>
<html lang="en">
	 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	@if(is_null($project))
		<h1>THIS PROJECT DOES NOT EXIST</h1>
	@else
		<h1 align="center">Solve Project: {{ $project->title }}</h1>
		<hr>
		<p align="center"> {{ $project->description }} </p>

		<br>

		<hr>

		<br>
		<br>

		<form method="POST" action="">

			<div class="form-group" align="center">
				<h4>Code</h4>
				<textarea name="code" class="form-control"></textarea>
			</div>

			<div class="form-group" align="center">
				<button type="button" class="btn btn-primary">Test the Code!</button>
				<button type="submit" id="submitBtn" class="btn btn-primary" disabled>Submit the Code!</button>
			</div>
		</form>
		
	@endif
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@stop