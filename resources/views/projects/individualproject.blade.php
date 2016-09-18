@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
						{{ $data['project']->title }} <small>{{ is_null($data['user']) ? 'User not found' : $data['user']->name}}</small>
					</h1>
				</div>
				<dl>
					<dt>
						<h4>Description:</h4>
					</dt>
					<dd>
						{{ $data['project']->description }}
					</dd>
					<dt>
						<h4>Best Solution Award:</h4>
					</dt>
					<dd>
						{{ $data['project']->bestSolutionAward }}
					</dd>
					<dt>
						<h4>Total Solutions Award:</h4>
					</dt>
					<dd>
						{{$data['project']->solutionsBudget }}
					</dd>
					<center>
					<a href="/submissions/{{$data['project']->id }}" class="btn btn-primary btn-block">Solve</a>
					</center>
				</dl>
			</div>
		</div>
		@if(Auth::check())
			@if(Auth::id() == $data['user']->id)
				<div class="row">
					<div class="col-md-12">
						<div class="panel-group" id="panel-234811">
							@foreach($data['solutionUsernameCodePairs'] as $pair)
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="panel-title" data-toggle="collapse" data-parent="#panel-234811" href="#panel-element-574330">{{ $pair['username'] }}</a>
								</div>
								<div id="panel-element-574330" class="panel-collapse collapse in">
									<div class="panel-body">
										{{ $pair['code'] }}
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			@endif
		@endif
	</div>
</body>
</html>
@stop