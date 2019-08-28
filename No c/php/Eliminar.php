<?php
    include("../conexiones/conexion1.php");

    $id = $_REQUEST['id'];

    $query = "DELETE FROM vis WHERE id='$id'";
    $result = $conn->query($query);

    if($result){
    	header("Location: consulta.php");

    }else{
    	echo "NO SE PUDO ELIMINAR";
    }


?>