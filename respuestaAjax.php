<?php
	require'conex.php';
	session_start();
	
	$val = false;

	if (isset($_SESSION['nickname'])) {
		if (isset($_POST['caso'])) {
			$caso = $_POST['caso'];
			$sql = 'INSERT INTO respuestas(id_preg, id_usu, respuesta) VALUES (1,"'.$_SESSION['id_usu'].'","'.$caso.'")';
			$insertar = $mysqli->query($sql);
			$val = true;
		}
		if (isset($_POST['resp'])) {
			$razon = $_POST['resp'];
			$sql1 = 'INSERT INTO respuestas(id_preg, id_usu, respuesta) VALUES (2,"'.$_SESSION['id_usu'].'","'.$razon.'")';
			$insertar1 = $mysqli->query($sql1);
			$val = true;
		}
		
		if ($val == true) {
			echo true;
		}
	}
	else{
		header("Location: index.php");
	}
?>