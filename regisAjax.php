<?php
	require'conex.php';
	session_start();

	$registro = false;

	if (isset($_POST['nickname']) && isset($_POST['edad']) && isset($_POST['sexo']) && $_POST['ubicacion']) {
		$sql = 'SELECT * FROM usuario';
		$consulta = $mysqli->query($sql);

		while ($row = $consulta->fetch_assoc()) {
			if ($row['apodo'] == $_POST['nickname']) {
				$registro = true;
			}
		}

		if ($registro == true) {
			echo "<h2 id='titulos-form'>Nickname en uso</h2>";
		}
		else{
			$nickname = $_POST['nickname'];
			$sexo = $_POST['sexo'];
			$edad = $_POST['edad'];
			$ubicacion = $_POST['ubicacion'];

			$sql1 = "INSERT INTO usuario (apodo,edad,genero,tipo_vivienda) VALUES ('".$nickname."','".$edad."','".$sexo."','".$ubicacion."')";
			$insertar = $mysqli->query($sql1);
			if ($insertar > 0) {
				echo "<h2 id='titulos-form'>Ya estas registrado</h2>
				<a class='hvr-float-shadow' href='login.php'>
					<img id='botones-inicio' class='img-fluid' src='source/img/BOTON-01.png'>
				</a>";
			}else{
				echo "<h2 id='titulos-form'>Error</h2>";
			}
		}
	}
?>