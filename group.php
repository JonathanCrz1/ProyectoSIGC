 <?php 
 	require 'views/group.view.php';
	include("admin/db.php");

	if (isset($_POST['idgrupo']) && !empty($_POST['idgrupo']) && 
		isset($_POST['numgrupo']) && !empty($_POST['numgrupo']) &&
	 	isset($_POST['id_maestro']) && !empty($_POST['id_maestro']) && 
	 	isset($_POST['id_asignatura']) && !empty($_POST['id_asignatura'])){

		$cox = mysqli_connect($server, $username, $password, $database);
	mysqli_query($cox,("INSERT INTO grupo (ID_GRUPO, NUM_GRUPO, ID_MAESTRO, ID_ASIGNATURA) VALUES('$_POST[idgrupo]','$_POST[numgrupo]','$_POST[id_maestro]','$_POST[id_asignatura]')"));

	echo "datos actualizados";
	}else{
		echo "error al actualizar";
	}
 ?>





