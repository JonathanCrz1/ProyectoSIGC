<?php

require 'admin/db.php';

$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];


$insertar = "INSERT INTO archivo(Name) VALUES('$nombre')";
$resultado = $conn->query($insertar);


if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado con exito");</script>';
		}else{
		echo '<script language="javascript">alert("Archivo no guardado");</script>';
		}
	}
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		echo '<script language="javascript">alert("Archivo guardado con exito");</script>';
	}else{
		echo '<script language="javascript">alert("Archivo no guardado");</script>';

	}
}
?>