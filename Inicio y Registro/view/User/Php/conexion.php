
	<?php 

	$db = new mysqli('localhost', 'root', '', 'soiling');
	$acentos = $db->query("SET NAME 'utf8'");

	if ($db->connect_error > 0) {
		
		die('No hay conexion_DB[' . $db->connect_error . ']');
	}



	 ?>