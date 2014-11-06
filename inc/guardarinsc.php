<?php 
require('conexion.php');

$carnet=$_POST['carnet'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$carrera=$_POST['carrera'];
$año=$_POST['año'];
$turno=$_POST['turno'];
$fotografia=$_POST['fotografia'];

$inscrip="INSERT INTO inscripcion (N_Carnet,Nombres,Apellidos,Carrera,Año,Turno,Fotografia) VALUES('$carnet','$nombre','$apellido','$carrera','$año','$turno','$fotografia')";
$resultado=$mysqli->query($inscrip);

header("Location: ../inscripcion.php");
exit();
 ?>