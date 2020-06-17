<?php 
 	require 'views/account.view.php';
	include("admin/db.php");

	if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
		isset($_POST['curp']) && !empty($_POST['curp']) &&
	 	isset($_POST['rfc']) && !empty($_POST['rfc'])){

		$cox = mysqli_connect($server, $username, $password, $database);
	mysqli_query($cox,("INSERT INTO docentes (NOMBRE, CURP, RFC, ID_Areas) VALUES('$_POST[nombre]','$_POST[curp]','$_POST[rfc]', '1')"));

	echo "datos actualizados";
	}else{
		echo "error al actualizar";
	}
 ?>





