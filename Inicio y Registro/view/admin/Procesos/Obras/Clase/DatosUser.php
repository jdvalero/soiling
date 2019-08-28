<?php



  class obras

{
  
  public $nombre;
  public $ciudad;
  public $departamento;
  private $direccion;
  private $inicio;
  public $fin;


    public function obra($nombre, $ciudad, $departamento, $direccion, $inicio, $fin)
    {

      include("../php/conexion.php");

      $sql = "INSERT INTO obras ( Estado_idEstado,NomObra, FecObraIni, FecObraFin, Dirrecion, Departamento, Ciudad) VALUES (1, '$nombre',  '$inicio', '$fin', '$direccion', '$departamento', '$ciudad')";

       if (!$result = $db->query($sql)) 
      {
        die('hay un error corriendo en la consulta o datos encontrados!!! [' .$db->error .']');
      }
      else{
        header("location:../Con_obra.php");
      }

    }

   
    
}


?>