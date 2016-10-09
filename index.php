<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="/bootstrap-3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="/bootstrap-3.3.7/css/bootstrap-theme.min.css">
	<script src="/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>

<body> 
	<div class="container">
	<?
		include_once 'field.php';
		
		$field = new Field();
		//$field->displayVar();
		
		echo "
		<div class=\"jumbotron\"> 
			<h1> Welcome <small>to nurikabe-web <strong>BETA</strong></small> </h1>
			<p>";
		/*-------------------------------------------------------------------*/
			$field->displayVar();
		/*-------------------------------------------------------------------*/
		echo "</p> </div>";
		
	?>
	</div> 
</body>

</html>