<?php 

	class pedidos{
	public $idPedidos;
	public $Obras;
    public $pedido;
    public $datos;


		public function pedido($sql)
		{
			$c= new conectar();

			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarPedido($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into pedidos (Obras_idObras, Pedido)
							values
							 ('$datos[0]','$datos[1]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizarPedido($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE pedidos set 
			Obras_idObras = '$datos[0]'
			,Pedido = '$datos[1]'
			where idPedidos='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarPedido($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from pedido where idPedidos='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>