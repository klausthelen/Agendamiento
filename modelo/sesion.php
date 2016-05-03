<?php 
include ("conexion.php");
$usua = $_POST['usuario'];
$usuario = (int) $usua;
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
			echo"<script>alert('El usuario, contraseña o tipo de usuario no son correctos');</script>";
			echo "<script> window.location = '../index.php';</script>";
			
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
			echo"<script>alert('El usuario, contraseña o tipo de usuario no son correctos');</script>";
			echo "<script> window.location = '../index.php';</script>";
		}
		else{
			$_SESSION['id_usuario'] = $row['IDestudiante'];
			$_SESSION['nombre'] = $row['Nombreestudiante'];
			header("location:../tareas.php");
		}
	}

}
else{
	echo"<script>alert('El usuario, contraseña o tipo de usuario no son correctos');</script>";
	echo "<script> window.location = '../index.php';</script>";
}





