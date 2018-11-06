<?php
	session_start();
	if (isset($_SESSION['nickname'])) {
?>
<!DOCTYPE html>
<html>
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

	<!--js-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/funciones.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="source/img/favicon.png" />
</head>
<body>
	<div class="container-fluid" id="contenedor">
    	<video src="source/video/video5.mp4" autoplay id="video"></video>
    	<div id="btn-resp"></div>
    	<div id="btn-resp-next"></div>
  		<script LANGUAGE="JavaScript">setTimeout ("boton5()", 32200);</script>
	</div>
</body>
</html>
<?php
}
?>