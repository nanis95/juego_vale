<?php
    session_start();
    if (isset($_SESSION['nickname'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>VALE - Cambiar mi mundo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<meta charset="utf-8">
	
	<!--jquery-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--Bootstrap-->
	<!--css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">	


	<script type="text/javascript" src="js/funciones.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="source/img/favicon.png" />	
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-md-center">
    		<div class="col-7">
    			<audio src="source/audio/Golly_Gee.mp3#t = 1" autoplay loop></audio>
		    	<img id="sopa" class="img-fluid" src="source/img/sopa.png">
		    	<div id="cuadro-sopa"></div>
		    	<div id="btn-next"></div>
    		</div>
    		<div class="col">
				<div class="row justify-content-md-center">
					<div class="col">
						<img id="dona" class="elementos-sopa" src="source/img/dona.png" class="img-fluid">
					</div>
					<div class="col">
						<img id="papa" class="elementos-sopa" src="source/img/papa.png" class="img-fluid">
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col">
						<img id="alverja" class="elementos-sopa" src="source/img/alverja.png" class="img-fluid">
					</div>
					<div class="col">
						<img id="brocoli" class="elementos-sopa" src="source/img/brocoli.png" class="img-fluid">
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col">
						<img id="sandwich" class="elementos-sopa" src="source/img/sandwich.png" class="img-fluid">
					</div>
					<div class="col">
						<img id="perro" class="elementos-sopa" src="source/img/perro.png" class="img-fluid">
					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col">
						<img id="zanahoria" class="elementos-sopa" src="source/img/zanahoria.png" class="img-fluid">
					</div>
					<div class="col">
						<img id="espinaca" class="elementos-sopa" src="source/img/espinaca.png" class="img-fluid">
					</div>
				</div>
    		</div>
  		</div>
	</div>
    <div id="dialog-message" title="GANASTE">
</body>
</html>
<?php
}
?>