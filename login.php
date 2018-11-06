<?php
	require'conex.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>VALE - Cambiar mi mundo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<meta charset="utf-8">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script type="text/javascript" src="js/funciones.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="source/img/favicon.png" />
</head>
<body>
	<div class="container-fluid justify-content-md-center" id="contenedor-regis">    	
		<form action="" name="form" id="form" method="POST">
			<div class="form-group">
				<label for="nickname" id="titulos-form">Ingresa tu nickname</label>
				<input type="text" name="nickname" id="nickname" class="form-control" required>
			</div>
			<input type="button" class="btn btn-dark" name="login" id="login" onclick="sesion();" value="Ingresar">
		</form>
		<div id="msg"></div>
	</div>
</body>
</html>