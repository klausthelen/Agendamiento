<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
      	<title>TITULO</title>
        <meta http-equiv="content-language" content="es"/>
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <script type="text/javascript"  src='./script.js'></script>
	</head>
	
	<body>
		 <div class="contenedor">
         
			<header class = "logo">
				
					
	            
	 			
			</header>
			  
			  <section class="world">
			  		<form class="form1" method="post" action="modelo/ingresardbase.php" name="form_entrar">
	                    
								    ID<br>
				                    <input type="text" name="pkey" >
				                    <br>
			        			    Nombre<br>
				                    <input type="text" name="nombre">
				                    <br>
				                    <label>Sexo</label> 
				                    <select name="Sexo">
				                    	<option value="Hombre">Hombre</option>
				                    	<option value="Mujer">Mujer</option>
				                    </select>
				                    </br>
				                    <button class="btn_ingdatos" type="submit">Ingresar datos</button>
				            </form>  	
						
							
						
			  </section>

			<footer class = "pie">
	         	FOOTER
	        </footer>	
        </div>	
    </body>
    	
</html> 