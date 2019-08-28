<?php 
     session_start();
	 require("../conexiones/conexion.php");
	 
	 if(isset($_POST['boton_registro']) &&  $_POST['name']!='' && $_POST['correo']!="" && $_POST['clave']){
	 
	            $nombre_usuario=$_POST['name'];
	            $correo_usuario=$_POST['correo'];
				$pass_usurio=$_POST['clave'];
				$crypted=sha1('$pass_usurio');
				
				
				$sql2="SELECT * FROM users WHERE Nombre='$name'";
				$sql3="SELECT * FROM users WHERE Correo='$correo'";
				
				$result1=mysqli_query($conectar,$sql2);
				$result2=mysqli_query($conectar,$sq13);
				
				$compara1=mysqli_num_rows($result1);
				$compara2=mysqli_num_rows($result1);
				
				if($compara1==1){
					echo "Este nombre de usuario ya esta en uso";
				}else if($compara2==1){
					echo"Este correo electronico ya esta en uso";
				}else{
					
					$sql="INSERT INTO  users (Nombre,Correo,contraseña) VALUES ('$nombre_usuario', '$correo_usuario', '$crypted') ";
					
					$result=mysqli_query($conectar,$sql);
					
					$_SESION['iniciar']='ingresar';
					header ("location:../index.php");
				}
			
			}else{
				echo "Digite todos los campos para continuar...";
			}
			
			?>