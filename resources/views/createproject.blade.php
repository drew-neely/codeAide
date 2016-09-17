@extends('layout')


@section('content')
	@if(is_null($project))
		<h1>THIS PROJECT DOES NOT EXIST</h1>
	@else
		<h1 align="center">Solve Problem: {{ $project->title }}</h1>

		<br>

		<h3 align="center">Add a Submission</h3>

		<br>
		<br>

		<form>
			<div class="form-group" align="center">
				<h4>Title</h4>
				<textarea name="title" class="form-control"></textarea>
			</div>

			<div class="form-group" align="center">
				<h4>Description</h4>
				<textarea name="description" class="form-control"></textarea>

			</div>

			

		</form>

		<form>
			<div class="form-group" align="center">
				<h4>Code</h4>
				<textarea name="code" class="form-control"></textarea>

			</div>

			<div class="form-group" align="center">
				<button type="submit" class="btn btn-primary">Submit the Code!</button>
				
			</div>
		</form>
	@endif
@stop