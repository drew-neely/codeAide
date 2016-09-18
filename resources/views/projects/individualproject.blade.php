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
				</dl>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel-group" id="panel-234811">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a class="panel-title" data-toggle="collapse" data-parent="#panel-234811" href="#panel-element-574330">Collapsible Group Item #1</a>
						</div>
						<div id="panel-element-574330" class="panel-collapse collapse in">
							<div class="panel-body">
								Anim pariatur cliche...
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@stop