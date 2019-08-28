<?php 
	require_once "../../Conexion/conexion.php";
	require_once "../Clases/Pedidos.php";

$Obras=$_POST['obra'];
$Pedidos=$_POST['pedido'];


	$datos=array(
			$Obras,$Pedidos
			
				);
	$obj= new pedidos();
	if($obj->insertarPedido($datos)==0){
		header("location:../Con_Pedidos.php");
	}else{
		echo "fallo al agregar";
	}

 ?>