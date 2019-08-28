<?php 
	require_once "../../Conexion/conexion.php";
	require_once "../Clases/Pedidos.php";
$persona=$_POST['usuario'];
$obras=$_POST['obra'];
$pedidos=$_POST['pedido'];



	$datos=array(
			$obras,$pedidos,$persona
				);
	$obj= new pedido();
	if($obj->insertarPedido($datos)==1){
		header("location:../Con_Pedidos.php");
	}else{
		echo "fallo al agregar";
	}

 ?>