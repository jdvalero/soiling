<?php

	require_once ('../Clase/DatosUser.php');
	

	$nuevo=new Registro();
	$nuevo->registrar($_POST["TI"], $_POST["NI"], $_POST["Nombre"], $_POST["direccion"], $_POST["Telefono"], $_POST["Email"]);



    
    


?>