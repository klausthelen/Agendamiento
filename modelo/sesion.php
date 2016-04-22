<?php 
include ("conexion.php");
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$tipo = $_POST['User_tipe'];
$query = "";
if(isset($usuario)){
	session_start();
	if($tipo == "profesor"){
		$query = "SELECT * FROM profesor WHERE IDprofesor=$usuario AND Contrasenia='$contrasenia'";
		$registro = mysql_query($query,$con);
		$row = mysql_fetch_array($registro);
		if(!$row['IDprofesor']){
			header("location:../index.php");
		}
		else{
			$_SESSION['id_usuario'] = $row['IDprofesor'];
			$_SESSION['nombre'] = $row['Nombreprofesor'];
			header("location:../tareas.php");
		}
	}
	else{
		$query = "SELECT * FROM estudiante WHERE IDestudiante=$usuario AND Contrasenia='$contrasenia'";
		$registro = mysql_query($query,$con);
		$row = mysql_fetch_array($registro);
		if(!$row['IDestudiante']){
			header("location:../index.php");
		}
		else{
			$_SESSION['id_usuario'] = $row['IDestudiante'];
			$_SESSION['nombre'] = $row['Nombreestudiante'];
			header("location:../tareas.php");
		}
	}

}
else{
	header("location:../index.php");
}

