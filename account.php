 <?php 
require 'views/account.view.php';
require 'admin/db.php';

	$nombre = $_POST["nombre"];
	$curp = $_POST["curp"];
	$rfc = $_POST["rfc"];
	$perfil = $_POST["perfil"];

		$sql = "INSERT INTO docentes (ID_MAESTRO, NOMBRE, CURP, RFC, PERFIL_PROFESIONAL, ID_Areas) VALUES ('$nombre', '$curp', '$rfc', '$perfil', '1')";
			$stmt = $conn->prepare($sql);

 ?>
