<?php
	require'conex.php';
	session_start();

	if (isset($_SESSION['nickname'])) {
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
  	<div class="row justify-content-md-center">
    		<div class="col">
    			<a href="si.php" class="hvr-bounce-in"><img id="dialogo-1" src="source/img/dialogo2-1.png"></a>
    		</div>
    		<div class="col">
    			<img id="hija" src="source/img/hija.png"></div>
    		<div class="col">
    			<a href="no.php" class="hvr-bounce-in"><img id="dialogo-2" src="source/img/dialogo2-2.png"></a>
    		</div>
  		</div>
</body>
</html>
<?php
	}
	else{
		header("Location: index.php");
	}
?>