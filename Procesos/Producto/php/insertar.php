<?php 
	require_once "../../Conexion/conexion.php";
	require_once "../Clases/Producto.php";

$UnidaMedida=$_POST['Medida'];
$Categoria=$_POST['Categoria'];
$Marca=$_POST['marca'];
$NomProducto=$_POST['nombres'];
$Descripcion=$_POST['txtCom'];
$Saldo=$_POST['Saldo'];
$Precio=$_POST['Valor'];
$Ubicacion=$_POST['ubicacion'];
$iva=$_POST['iva'];
$Comentario=$_POST['txtDesc'];

	$datos=array(
			$UnidaMedida,$Categoria,$Marca,
			$NomProducto,$Descripcion,$Saldo,
			$Precio,$Ubicacion,$iva,$Comentario
				);
	$obj= new Producto();
	if($obj->insertarProducto($datos)==1){
		header("location:../Con_Producto.php");
	}else{
		echo "fallo al agregar";
	}

 ?>