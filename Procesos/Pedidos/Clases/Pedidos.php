<?php 

	class pedido{

    public $idpedidos;
    public $idpersona;
    public $idobras;    
    public $pedido;
    public $datos;


		public function ConsultarPedido($sql)
		{
			$c= new conectar();

			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarPedido($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into pedidos (Persona_idPersona,Obras_idObra,Pedido)
							values
							 ('$datos[2]','$datos[0]','$datos[1]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizarProducto($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE producto set 
			Unidademedida_idUnidademedida = '$datos[0]'
			,Categoria_IdCategoria = '$datos[1]'
			,Marca_idMarca = '$datos[2]'
			,Nom_producto = '$datos[3]'
			,Descripcion = '$datos[4]'
			,Saldo = '$datos[5]'
			,Precio = '$datos[6]'
			,Ubicacion = '$datos[7]'
			,Iva = '$datos[8]'
			,Comentario = '$datos[9]'
			where idProducto='$datos[10]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarProducto($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from producto where idProducto='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>