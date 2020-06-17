<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>SIGC - Entrar o registrarse</title>
</head>
<body>
	<header class="nombre_app">
		<a href="/ProyectoSIGC"> SIGC </a>
	</header>
	<div class="contenedor_index">
		<form class="datos" action="index.php" method="post">
			<input name="email" type="text" placeholder="Ingresa tu correo">
     		<input name="password" type="password" placeholder="Ingresa tu contraseña">
    		<input type="submit" value="Submit">
			<div class="reg-div">
				<label>¿No tienes una cuenta?</label> <a href="signup.php">Regístrate</a>
			</div>
		</form>
	</div>
</body>
</html>