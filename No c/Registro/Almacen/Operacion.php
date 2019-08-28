<?php 

include "Reg_Almacen.php";

$Nombre=$_POST['nombre'];
$CajaInicial=$_POST['Cajai'];
$Sitio=$_POST['Sitio'];
$Responsable=$_POST['Respon'];
$Fecha=$_POST['Fecha'];

$objRegistro = new RegistroAlmacen();
$objRegistro->RegistrarAlm($Nombre,$CajaInicial,$Sitio,$Responsable,$Fecha);

echo 'SU registro se realizo adecuadamente';

 ?>