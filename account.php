 <?php 
 	require 'views/account.view.php';
	include("admin/db.php");

	if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
		isset($_POST['curp']) && !empty($_POST['curp']) &&
	 	isset($_POST['rfc']) && !empty($_POST['rfc']) && 
	 	isset($_POST['perfil']) && !empty($_POST['perfil'])){




		$cox = mysqli_connect($server, $username, $password, $database);
	mysqli_query($cox,("INSERT INTO docentes (NOMBRE, CURP, RFC, PERFIL_PROFESIONAL, ID_Areas) VALUES('$_POST[nombre]','$_POST[curp]','$_POST[rfc]','$_POST[perfil]', '1')"));

	echo "datos actualizados";
	}else{
		echo "error al actualizar";
	}
 ?>





