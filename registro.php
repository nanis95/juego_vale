<!DOCTYPE html>
<html lang="en">
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
		<form action="regisAjax.php" name="form" id="form" method="POST">
			<div class="form-group">
				<label for="nickname" id="titulos-form">Ingresa un nickname</label>
				<input type="text" name="nickname" id="nickname" class="form-control" required>		
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-8">
						<p id="titulos-form">Sexo:</p>
						<div class="form-check">
							<div class="row">
								<div class="col">
									<input class="form-check-input" type="radio" name="sexo" id="sexof" value="F">
									<label for="sexo">Femenino</label>
								</div>
								<div class="col">
									<input class="form-check-input" type="radio" name="sexo" id="sexom" value="M">
									<label for="sexo">Masculino</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="edad" id="titulos-form">Edad</label>
							<input type="number" name="edad" id="edad" class="form-control form-control-sm" required>
						</div>
					</div>
				</div>
			</div>
			<div class="form-check">
				<p id="titulos-form">Lugar donde vives:</p>
				<div class="row">
					<div class="col">
						<input class="form-check-input" type="radio" name="ubicacion" id="ubi-rural" value="Rural">
						<label for="ubicacion">Rural</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="ubicacion" id="ubi-urbano" value="Urbano">
						<label for="ubicacion">Urbano</label>
					</div>
				</div>
			</div>
			<button class="btn btn-dark" type="button" name="" value="" onclick="registrar();">Registrar</button>
		</form>
		<div id="iniciar"></div>
		<div id="boton-j"></div>
	</div>
</body>