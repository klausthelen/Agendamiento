<?php 
include ("conexion.php");

$primarkey = $_POST['pkey'];
$nombre = $_POST['nombre'];
$tipo = $_POST['Sexo'];
$query = "INSERT INTO `entrardatos`(`pk`, `nombre`, `sexo`) VALUES ($primarkey,'$nombre','$tipo')";
$registro = mysql_query($query,$con) or die(mysql_error());
$respu = 1;
echo"<script>alert('Muy bien ingresados los datos');</script>";
echo "<script> window.location = '../entrar.php';</script>";


 ?>