<?php
	session_start();
	require("../conexiones/conexion.php");
	
	if(isset($_POST['boton_inicio'])){ 

		if($_POST['name']!="" && $_POST['clave']!=""){
			
			$correo1=$_POST['name'];
			$pass1=$_POST['clave'];
			$crypt1=sha1($pass1);

			$accesox="SELECT * FROM users WHERE Nombre='$correo1' AND contraseña='$crypt1'";	
				
			$comparx=mysqli_query($conectar, $accesox);
			
			$contx=mysqli_num_rows($comparx);
			

					if($contx==0){
						
						$_SESION['iniciar']='ingresar';
						header ("location: ../index_ini.php");
				
					}else{
				
						echo "el correo o la contraseña son incorrectos, por favor reviselos";
					}	  	

			}else{
				echo "Diligencie todos los campos";
			}
	}		
	
?>


<!DOCTYPE html>
<html lang="es">
<head><title>Error de Acceso</title></head>
<body>
	<br>
	<p>Se presento un error en el ingreso por favor vuelva a intentarlo</p>
	<a href="../Iniciosesion.php">Inicio de Sesion</a>
</body>
</html>