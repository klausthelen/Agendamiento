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
	    <script type="text/javascript">
			function entrar_fail(){
				 alert ("Gracias por presionarme, por el momento solo estoy de adorno.\n")
				 alert ("Programame por favor¡¡¡¡¡ :3 \n")
				 window.location.replace("tareas.php");
			}
			</script>
	</head>
	
	<body>
		<?php 
			$stringo = "Estamos usando PHP";
			echo $stringo;
		?>
		 <div class="contenedor">
         
			<header class = "logo">
				
					<center><img class="img_logo" src="images/Logo.png" ></a></center>
	            
	 			
			</header>
			
			  <section id="Welcome" class ="Welcome">
			  	<article> Plataforma Online para gestion y agendamiento de trabajos escolares. <br> <center>USB</center> 	
			  	<a class="acerca" href="https://github.com/klausthelen"><span class="icon-accessibility"></span> Acerca de</a></article>
			  </section>
			  <center><p class="fecha" id="fecha"></p></center>
			  <section class="world">
			  			
						<section class="image_usb"><img class="img_cal" id="img_cal" src="images/presindex/cal1.png" ></section>
						<section class="login">
							<form class="form1" method="post" action="hola.php" name="form_user">
	                    
								    <span class="icon-user"> </span>Usuario:<br>
				                    <input type="text" name="usuario" id="user_input" class="user_input">
				                    <br>
			        			    <span class="icon-key2"> </span>Contraseña:<br>
				                    <input type="password" name="contrasenia" id="password_input" class="password_input">
				                    <label>Tipo de usuario</label> 
				                    <select name="User_tipe">
				                    	<option value="estudiante">Estudiante</option>
				                    	<option value="profesor">Profesor</option>
				                    </select>
				                    </br>
				                    <button class="btn_entrar"  type="submit"><span class="icon-clubs"></span> Entrar</button>
				            </form>        
				                    
				            		<button  id="btn_nopass" onclick="ocultar_pass()" class="btn_oc_pass type="button" "><span class="icon-power"></span>Mostrar contraseña</button>
				                    
				        </section>
						
			  </section>
			  
			<footer class = "pie">
	         	© 2016 por KLAUS THELEN & MARIA  PAULA SANCHEZ.
	        </footer>	
        </div>	
    </body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript/ocultar_pass.js"></script>
    <script src="javascript/cargar.js"></script>
    <script src="javascript/slide.js"></script>
</html> 