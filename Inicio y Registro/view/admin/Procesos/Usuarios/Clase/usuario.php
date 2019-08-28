<?php 

	class usuario{

    public $idPersona;
    public $Estado;
    public $Tipo_documento;    
    public $Cargo;
    public $Doc_persona;
    public $nom_persona;
    public $Direccion;
    public $Email;
    

		public function ConsultarProduto($sql)
		{
			$c= new conectar();

			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarusuario($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into persona (Estado_idEstado,TipoDocumento_idTipoDocumento,TipoCargo_IdUsuario,Doc_persona,Direccion,Telefono,Email)
							values
							 ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]',)";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizarusuario($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE persona set 
			Estado_idEstado = '$datos[0]'
			,TipoDocumento_idTipoDocumento = '$datos[1]'
			,TipoCargo_idUsuario= '$datos[2]'
			,Doc_persona = '$datos[3]'
			,Nom_persona = '$datos[4]'
			,Direccion = '$datos[5]'
			,Telefono = '$datos[6]'
			,Email = '$datos[7]'
			
			where idPersona='$datos[8]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarProducto($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from persona where idPersona='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>