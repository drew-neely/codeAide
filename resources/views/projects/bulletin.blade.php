@extends('layout')

@section('content')
<div class="col-ct-6">
	<h3>Bulletin</h3>
</div>
<div class="panel-group">
	@foreach($projects as $p)
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title" align="center">
				<a data-toggle="collapse" href="#collapse1">{{$p -> title}}</a>
			</h4>
		</div>
		<div id="collapse1" class="panel-collapse collapse">
			<ul class="list-group">
				<li class="list-group-item">{{$p -> description}}</li>
				<li class="list-group-item">Best Solution Award : {{ $p->bestSolutionAward }}</li>
				<li class="list-group-item">Total Solutions Award : {{ $p->solutionsBudget }}</li>
				
			</ul>
		</div>
	</div>
	@endforeach
</div>



@stop
