<?php

require_once('../../inicio/model/conexion.php');


class RegistroAlmacen extends Conexion
{
	private $Nombre;
	private $CajaInicial;
	private $Sitio;
	private $Responsable;
	private $Fecha;


	public function RegistrarAlm($Nombre,$CajaInicial,$Sitio,$Responsable,$Fecha)
{
	parent::conectar();

	$Nombre  = parent::filtrar($Nombre);
	$CajaInicial = parent::filtrar($CajaInicial);
	$Sitio = parent::filtrar($Sitio);
	$Responsable = parent::filtrar($Responsable);
	$Fecha = parent::filtrar($Fecha);

	parent::query('insert into almacen(Nombre,Cinicial,Sitio,Responsable,Fecha) 
	values ("'.$Nombre.'", "'.$CajaInicial.'","'.$Sitio.'", ,"'.$Responsable.'",,"'.$Fecha.'")');


}
}


?>

