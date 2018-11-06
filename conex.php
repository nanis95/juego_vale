<?Php
//Conexión con el servirdor y la BD
$mysqli = new mysqli('localhost','root','','vale');

//Validación de la conexión
if(mysqli_connect_errno()){
	echo 'Conexion Fallida : ', mysqli_connect_error();
exit();
}
else 
{
	if($mysqli){ 
		mysqli_set_charset($mysqli,'utf8');
    }
}