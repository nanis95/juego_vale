<?php
	require'conex.php';
	session_start();

	if (isset($_SESSION['nickname'])) {
		$sql = 'SELECT * FROM respuestas WHERE id_usu="'.$_SESSION['id_usu'].'"';
		$consulta = $mysqli->query($sql);

		if ($consulta->num_rows) {
			header("Location: si.php");
		}
		else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>VALE - Cambiar mi mundo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    
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
		<div><audio src="source/audio/pregunta.mp3" autoplay></div>
		<form action="" name="form" id="form" method="POST">
			<div class="form-group">
				<p id="titulos-form">¿Conoces a alguna niña que como Valentina haya dejado de estudiar?</p>
				<div class="row">
					<div class="col">
						<input class="form-check-input" type="radio" name="caso" id="casosi" value="SI" onclick="si()">
						<label for="caso">Si</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="caso" id="casono" value="NO">
						<label for="caso">No</label>
					</div>
				</div>
			</div>
			<div class="form-check">
			<div id="audio"></div>
			<div id="otra-preg"></div>
			<div id="resp"></div>
			<input class="btn btn-dark" type="button" name="no_est" id="no_est" value="Enviar" onclick="pregunta1();">
		</form>
		<div id="msg"></div>		
    </div>
</body>
</html>
<?php
		}
	}
	else{
		header("Location: index.php");
	}
?>