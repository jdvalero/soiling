<?php

$id = $_SESSION['id'];


  class Registro

{

  public $TipoDocumento;
  public $Doc_persona;
  public $Nom_persona;
  private $Direccion;
  private $Telefono;
  public $Email;


    public function registrar($TipoDocumento, $Doc_persona, $Nom_persona, $Direccion, $Telefono, $Email)
    {

      include("../php/conexion.php");

      $sql = "INSERT INTO persona (Estado_idEstado, TipoDocumento_idTipoDocumento, TipoCargo_idUsuario, Doc_persona, Nom_persona, Direccion, Telefono, Email) VALUES (1, '$TipoDocumento', 3, '$Doc_persona', '$Nom_persona', '$Direccion', '$Telefono', '$Email')";

       if (!$result = $db->query($sql)) 
      {
        die('hay un error corriendo en la consulta o datos encontrados!!! [' .$db->error .']');
      }
      else{
        header("location:../../../../Index_Inicio.php");
      }

    }
    
}


?>