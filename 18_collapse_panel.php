<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<hr>

<div class="container">
	<h2>Collapsible Panel Example</h2>
	<div class="panel-group col-sm-3">
		<div class="panel panel-default">
		
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse_me">Main Menu</a>
				</h4>
			</div>
			
			<div id="collapse_me" class="panel-collapse collapse">
				
				<div class="panel-body">Manage Product</div>
				<div class="panel-footer">List Products</div>
				<div class="panel-footer">List Categories</div>
				<div class="panel-footer">List Elements</div>
				
				<div class="panel-body">Panel Body</div>
				<div class="panel-footer">Panel Footer</div>
				<div class="panel-footer">Panel Footer</div>
				<div class="panel-footer">Panel Footer</div>
			
			</div>
			
		</div>
	</div>
</div>

<hr>

<div class="container">

	<h2>Accordion Example</h2>
	
	<div class="panel-group" id="accordion">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
			</div>
		</div>
		
	</div> 
</div>

<hr>
    
</body>
</html>
