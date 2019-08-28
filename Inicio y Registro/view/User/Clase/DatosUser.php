<?php

  require_once('../../../model/conexion.php');

  class DatosUsuario extends Conexion
  {

    public function add_cliente($nombre,$Direccion,$Telefono,$TipoI,$NumeroI,$Email)
    {
      parent::conectar();

        parent::query('insert into persona(Estado_idEstado,TipoDocumento_idTipoDocumento,TipoCargo_idUsuario,Doc_persona,Nom_persona,Direccion,Telefono,Email) 
        values 
        ("'1'","'.$TipoI.'", "'3'","'.$NumeroI.'","'.$nombre.'","'.$Direccion.'","'.$Telefono.'","'.$Email.'")');

      }

      parent::cerrar();
    }

?>