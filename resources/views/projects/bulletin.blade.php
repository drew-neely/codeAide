@extends('layout')

@section('content')
<div class="col-ct-6">
	<h3>Bulletin</h3>
</div>
<div class="panel-group">
	<?php $count = 1; ?>
	@foreach($projects as $p)
	<div class="panel panel-default">
		<div class="panel-heading">
				<center>
				<a data-toggle="collapse" href="#collapse{{ $count }}" class="btn btn-primary btn-block btn-lg">{{$p -> title}}</a>
				</center>

		</div>
		<div id="collapse{{ $count }}" class="panel-collapse collapse">
			<ul class="list-group">

				<li class="list-group-item">{{$p -> description}}</li>
				<li class="list-group-item">Best Solution Award : {{ $p->bestSolutionAward }}</li>
				<li class="list-group-item">Total Solutions Award : {{ $p->solutionsBudget }}</li>
				<center><li class="list-group-item"><a href="/" class="btn btn-primary">Solve</a></li></center>
				
			</ul>
		</div>
	</div>
	<?php $count++; ?>
	@endforeach
</div>



@stop
