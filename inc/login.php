<?php 
session_start();
require('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$consulta="SELECT * FROM  login_admin";
$resultado=$mysqli->query($consulta);

while($fila=$resultado->fetch_assoc())
{


	$user=$fila['Nombre'];
	
	$pass=$fila['pass'];
	
	if($usuario==$user & $contraseña==$pass)
	{
		header("Location: ../index.php");
		exit();
	}
	else
	{
		
	}

}
?>