<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>SIGC - regístro</title>

</head>
<body>   
	<header class="nombre_app">
		<a href="/ProyectoSIGC">SIGC</a>
	</header>
	<div class="contenedor_index">
		<form class="datos" action="signup.php" method="post">
			<input name="user" type="text" placeholder="Ingresa tu nombre">
			<input name="email" type="text" placeholder="Ingresa tu correo">
     		<input name="password" type="password" placeholder="Ingresa tu contraseña">

     		<!-- <div class="box">
			<select name="rol">
				<option value=""></option>
				<option value="">Jefe academico</option>
				<option value="">Docente</option>
				<option value="">Servicio social</option>
				<option value="">Alumno</option>
			</select>
     		</div> -->

    		<input type="submit" value="Submit">

			
			
			
			<div class="reg-div">
				<label>¿Ya tienes una cuenta?</label> <a href="index.php">Iniciar sesión</a>
			</div>

		</form>
	</div>
</body>
</html>