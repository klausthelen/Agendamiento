<?php 
include ("modelo/conexion.php");
session_start();
if(!$_SESSION){
	header("location:index.php");
}
 ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
      	<title>ChronoWork-- Plataforma de agendamiento Universidad San Buenaventura Bogotá </title>
        <meta http-equiv="content-language" content="es"/>
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	    <link rel="stylesheet" type="text/css" href="icomoon/iconstyle.css">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <noscript>
	    	<meta http-equiv="refresh" content="0; url=noscript.html" >
	    </noscript>
	    </head>
	
	<body>
	
		 <div class="contenedor">
         
			<header>
				
					<center><img class="img_logo" src="images/Logo.png" ></a> <br> </center>
					<div class="menu_bar">
						<a href="#" class="bt_menu"><span class="icon-menu3"></span>Menu</a>
					</div>
	            	<nav class="menu_nav">
	            		<ul class="menu">
	            			<li><a id="item1" href="tareas.php"><span class="icon-home3"></span>Inicio </a></li>
	            			<li><a id="item2" href="#">		  <span class="icon-books"></span>Cursos </a></li>
	            			<li><a id="item3" href="#">          <span class="icon-mail2"></span>Mensajes </a></li>
	            			<li><a id="item4" href="https://github.com/klausthelen"> <span class="icon-accessibility"></span>Acerca de. </a></li>
	            			<li><a id="item5" href="cerrar.php"> <span class="icon-exit"></span>Cerrar sesion </a></li>	
	            				
	            			</ul>
	            	</nav>
	 		</header>	
			
			  <center><p class="fecha" id="fecha"></p></center>
			  <section class="world">
			  			<section class="listado">Aqui se insertaran los cursos que posee el estudiante
			  			<br>
			  			<?php 
							echo $_SESSION['nombre'];
		                ?>
			  			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			  			</section>
						
						
			  </section>

			<footer class = "pie">
	         	© 2016 por KLAUS THELEN & MARIA  PAULA SANCHEZ.
	        </footer>	
        </div>	
        
        </body>
    	<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="javascript/cargar.js"></script>
</html> 