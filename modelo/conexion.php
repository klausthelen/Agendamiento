<?php 
$host = "localhost";
$user = "chronowork";
$pass = "klausmariapaula";
$db = "chronowork";
$con = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($db,$con) or die(mysql_error());
/*
$query = "SELECT Nombreestudiante from estudiante WHERE IDfacultad=1";
$registro = mysql_query($query,$con);

 while($row = mysql_fetch_array($registro)){
 	echo $row["Nombreestudiante"]."</br>";
 }
*/
 ?>