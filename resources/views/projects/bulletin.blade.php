@extends('layout')

@section('content')
	<div class="col-ct-6">
			<h3>Bulletin</h3>
	</div>
@foreach($projects as $p)
<div class="panel-group">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title" align="center">
							<a data-toggle="collapse" href="#collapse1">{{$p -> title}}</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">{{$p -> description}}</li>
						</ul>
					</div>
				</div>
			</div>
@endforeach


@stop
