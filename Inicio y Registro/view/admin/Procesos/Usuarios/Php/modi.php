<?php

include("../../../conexiones/conexion1.php");


                $id =$_POST['id'];
     			$car=$_POST['cargo'];
	          

$query="UPDATE usuarios SET cargo ='$car'
	WHERE id ='$id'";

	 $result = $conn->query($query);
   
	 if($result){
    	$_SESION['iniciar']='ingresar';
					header ("location:index.php");

    }else{
    	echo "NO FUE ENVIADO";
    }


?>