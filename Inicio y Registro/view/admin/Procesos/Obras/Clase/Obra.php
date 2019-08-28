<?php 

	class Obra{

		public function ConsultarObra($sql)
		{
			$c= new conectar();

			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarProducto($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into producto (Estado_idEstado,Unidademedida_idUnidademedida,Categoria_IdCategoria,Marca_idMarca,Nom_producto,Descripcion,Saldo,Precio,Ubicacion,Iva,Comentario)
							values
							 ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizarProducto($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE producto set 
			Estado_idEstado= '$datos[0]',
			Unidademedida_idUnidademedida = '$datos[1]'
			,Categoria_IdCategoria = '$datos[2]'
			,Marca_idMarca = '$datos[3]'
			,Nom_producto = '$datos[4]'
			,Descripcion = '$datos[5]'
			,Saldo = '$datos[6]'
			,Precio = '$datos[7]'
			,Ubicacion = '$datos[8]'
			,Iva = '$datos[9]'
			,Comentario = '$datos[10]'
			where idProducto='$datos[11]'";
			return $result=mysqli_query($conexion,$sql);

		}

		public function eliminarProducto($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="UPDATE producto set 
			Estado_idEstado= 2,
			where idProducto='$id'";
			return $result=mysqli_query($conexion,$sql);

		}
		
	}
 ?>