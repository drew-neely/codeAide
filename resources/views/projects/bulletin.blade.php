@extends('layout')

@section('content')
<div class="col-ct-6">
	<h3>Bulletin</h3>
</div>
<div class="panel-group">
	<?php $count = 1; ?>
	@foreach($projects as $p)
	<center>
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
				<center><li class="list-group-item"><a href="/indivproject/{{ $p->id }}" class="btn btn-primary">Continue</a></li></center>
				
			</ul>
		</div>
	</div>
	</center>center>
	<?php $count++; ?>
	@endforeach
</div>



@stop
