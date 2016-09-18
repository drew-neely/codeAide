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
		<h5>Description</h5>
		<p align="center"> {{ $project->description }} </p>

		<h5>Best Solution Award</h5>
		<p align="center"> {{ $project->bestSolutionAward }} </p>
		<h5>Total Solutions Award</h5>
		<p align="center"> {{ $project->solutionsBudget }} </p>
		<hr>

		<br>
		<br>

		<form method="POST" action="/submissions/{{ $project->id }}/submit">

			<div class="form-group" align="center">
				<h4>Code</h4>
				<textarea name="code" id="codeBox" class="form-big"></textarea>
			</div>

			<div class="form-group" align="center">
				<button type="button" id="test" class="btn btn-primary" onclick="runTests('{{ $project->tests }}')">Test the Code!</a>
				<button type="submit" id="submitBtn" class="btn btn-primary" disabled>Submit the Code!</button>
			</div>
		</form>
		
	@endif
	
	<script src="/js/testing.js"></script>

  </body>
</html>
@stop