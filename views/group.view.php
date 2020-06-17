 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	
	<?php require 'header.php'; ?>

	<div class="contenedor">
		<main>
		<article>
			<div class="contenedor_grupo">
			<form class="datos" action="group.php" method="post">
			<h2 class="titulo_">Agregar grupo</h2>
			<!-- <div class="box">
		
     		</div> -->
			<input name="idgrupo" type="text" placeholder="Ingrese su grupo">
			<input name="numgrupo" type="text" placeholder="Ingrese su número de grupo">
			<input name="id_maestro" type="text" placeholder="Ingrese su id de maestro">
     		<input name="id_asignatura" type="text" placeholder="Ingrese la id de la asignatura">
   
     		</div> 
    		<input type="submit" value="Submit">
			<!-- <div class="reg-div">
				<label>¿Ya tienes una cuenta?</label> <a href="index.php">Iniciar sesión</a>
			</div> -->
			</form>
		</div>
		</article>
		</main>
	</div>
 </body>
 </html>