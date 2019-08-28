<?php 
	$id=$_GET['idProducto'];

	require_once "conexion.php";
	require_once "metodosCrud.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../inventario.php");
	}else{
		echo "fallo al agregar";
	}
 ?>