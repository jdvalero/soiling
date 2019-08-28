<?php 

	class producto{

    public $idProducto;
    public $UnidaMedida;
    public $Categoria;    
    public $Marca;
    public $NomProducto;
    public $Descripcion;
    public $Saldo;
    public $Precio;
    public $Ubicacion;
    public $iva;
    public $Comentario;
    public $datos;


		public function ConsultarProduto($sql)
		{
			$c= new conectar();

			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}

		public function insertarProducto($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into producto (Unidademedida_idUnidademedida,Categoria_IdCategoria,Marca_idMarca,Nom_producto,Descripcion,Saldo,Precio,Ubicacion,Iva,Comentario)
							values
							 ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]')";

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