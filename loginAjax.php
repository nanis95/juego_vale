<?php
	require'conex.php';
	session_start();
	$acceso = false;

	if (isset($_POST['nickname'])) {
		$sql = 'SELECT * FROM usuario';
		$consulta = $mysqli->query($sql);

		while ($row = $consulta->fetch_assoc()) {
			if ($row['apodo'] == $_POST['nickname']) {
				$_SESSION['nickname'] = $_POST['nickname'];
				$_SESSION['id_usu'] = $row['id_usu'];
				$acceso = true;
			}
		}

		if ($acceso == true) {
			echo true;
		}
		else{
			echo "<a href='registro.php'><h2 id='titulos-form'>Haz clic para registrarte</h2></a>";
		}
	}
	else{
		header("Location: index.php");
	}
?>