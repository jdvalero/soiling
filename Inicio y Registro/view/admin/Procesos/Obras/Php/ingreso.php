<?php

	require_once ('../Clase/DatosUser.php');
	

	$nuevo=new obras();
	$nuevo->obra($_POST["nombre"], $_POST["ciudad"], $_POST["departamento"], $_POST["direccion"], $_POST["inicio"], $_POST["fin"]);



    
    


?>