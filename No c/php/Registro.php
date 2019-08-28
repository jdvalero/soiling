<?php 
     session_start();
	 require("../conexiones/conexion.php");
	 
	 if(isset($_POST['button']) &&  $_POST['Name']!='' && $_POST['document']!=""  && $_POST['Clave']){
	 
	         
	            $nombre_Persona=$_POST['Name'];
	            $Documento_usuario=$_POST['document'];
	            $Numero_Documento=$_POST['Numero'];
	            $Cargo_usuario=$_POST['Cargo'];
	            $Telefono_usuario=$_POST['Telefono'];
      			$Email_usuario=$_POST['Email'];
				$pass_usurio=$_POST['Clave'];
				
				

					$sql="INSERT INTO  persona (Contraseña,Tipo_persona,Doc_persona,Tipo_doc,Nom_persona,Telefono,Email) 

					VALUES 

					('$pass_usurio,$Cargo_usuario,$Numero_Documento,$Documento_usuario,$nombre_Persona,$Telefono_usuario,$Email_usuario') ";
					
			 $result = $conn->query($sql);

    if($result){
    	header("Location:../index.html");

    }else{
    	echo "NO FUE ENVIADO";
    }
				
			
			}else{
				echo "Digite todos los campos para continuar...";
			}
			
			?>