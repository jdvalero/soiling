<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into estado (Descripcion)
							values ('$datos[0]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE t_persona set nombre='$datos[0]',
										apellido='$datos[1]'
								where id='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatos($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from producto where idProducto='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>