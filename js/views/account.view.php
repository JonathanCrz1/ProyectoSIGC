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
			<div class="contenedor_cuenta">
			<form class="datos" action="account.php" method="post">
			<h2 class="titulo_">Mi cuenta</h2>
			<!-- <div class="box">
			<select name="rol">
				<option hidden selected>Selecciona una opción</option>
				<option value="">2.- Docente</option>
			</select>
     		</div> -->
			<input name="nombre" type="text" placeholder="Ingrese su nombre">
			<input name="curp" type="text" placeholder="Ingrese su CURP">
			<input name="rfc" type="text" placeholder="Ingrese su RFC">
     		<!-- <input name="perfil" type="text" placeholder="Ingrese su perfil profesional"> -->
     		<!-- <div class="box">
			<select name="area_aca">
				<option hidden selected>Area academica a la que pertenece</option>
				<option value="">Sistemas y computación</option>
			</select>
     		</div> -->
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