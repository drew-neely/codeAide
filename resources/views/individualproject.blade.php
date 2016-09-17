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
					Project Name Here <small>by username here</small>
				</h1>
			</div>
			<dl>
				<dt>
					About
				</dt>
				<dd>
					A description list is perfect for defining terms.
				</dd>
				<dt>
					Some other stuff I guess.
				</dt>
				<dd>
					Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
				</dd>
				<dd>
					Donec id elit non mi porta gravida at eget metus.
				</dd>
				<dt>
					Malesuada porta
				</dt>
				<dd>
					Etiam porta sem malesuada magna mollis euismod.
				</dd>
				<dt>
					Felis euismod semper eget lacinia
				</dt>
				<dd>
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</dd>
			</dl>
		</div>
	</div>
	<div class="row">
		<div class="panel-group">
				  <div class="panel panel-default">
				  	<div class="panel-heading">
				  		<h4 class="panel-title">
				  			<a data-toggle="collapse" href="#collapse5">Collapsible list group</a>
				  		</h4>
				  	</div>
				  	<div id="collapse5" class="panel-collapse collapse">
				  		<ul class="list-group">
				  			<li class="list-group-item">One</li>

				  		</ul>
				  		
				  	</div>
				  </div>
				</div>
	</div>
</div>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@stop