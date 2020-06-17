 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title></title>
</head>
<body>
		<nav class="menu" id="menu">
			<div class="contenedor contenedor-enlaces-nav">
				<div class="btn-tools" id="btn-tools">
					<p>SIGC<span>Categorías</span></p>
					<i class="fas fa-angle-down"></i>
				</div>
				<div class="enlaces">
					<a href="home.php">Inicio</a>
					<a href="logout.php">Cerrar sesión</a>
				</div>
			</div>
			<div class="contenedor contenedor-menu">
				<div class="grid" id="grid">
					<div class="categorias">
						<h3 class="titulo">Categorías</h3>
						<!-- Herramientas -->
							<a href="/" data-categoria="Herramientas" class="link_titulo">Herramientas</a>
								<a href="template.php"><i class="fas fa-download"></i>Descarga de plantillas</a>
								<a href="fechas.php"><i class="fas fa-calendar"></i>Calendario escolar</a>
								<a href="report.php"><i class="fas fa-file"></i>Reportes</a>
						<!-- Administracion -->
							<a href="/" data-categoria="Administracion"  class="link_titulo">Administración</a>
								<a href="account.php"><i class="fas fa-user"></i>Cuenta</a>
								<a href=""><i class="fas fa-question-circle"></i>Ayuda</a>
					</div>
				</div>
			</div>
		</nav>
		
		<script src="https://kit.fontawesome.com/5565417d5d.js" crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
</body>
</html>