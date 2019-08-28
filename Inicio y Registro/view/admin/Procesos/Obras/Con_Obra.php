<?php 
  require_once "../Conexion/conexion.php";
  require_once "Clase/Obra.php";
 ?> 
<!DOCTYPE html>
<html>
	<head>
     <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
		<title>Plantilla</title>
		<link rel="stylesheet" type="text/css" href="../../../../../css/Estilo_inv.css">

	</head>
	<body>

		<header > 
		<div class="wrapper1">
			<div class="logo1">
				Soiling
			</div>
	  <nav class="nav">
      <ul class="menu">

        <li> <a href="../../Index_Inicio.php">Inicio</a> </li>
        <li><a href="#">Obras</a>
        <ul class="submenu">
          <li><a href="reg_Obras.php">Registrar Obra</a></li>
          <li><a href="Mod_Obra.php">Modificar Obra</a></li>
          <li><a href="Con_Obra.php">Consultar Obra</a></li>
        </ul>
        </li>
         <li><a href="#">Usuarios</a>
          <ul class="submenu">
            <li><a href="../Usuarios/Con_Usuarios.php">Consulta Usuario</a></li>
          <li><a href="../Usuarios/Mod_Usuario.php">Modificar Usuario</a></li>
        </ul>
       </li>
       <li><a href="../../../../controller/cerrarSesion.php">Cerrar sesion</a></li>

      </ul>

    </nav>
		</div>
	</header>


<br>
<br><br><br><br><br>
<center>
<div class="container">
	<br>

	<h1>Obras</h1>
	<br>

	<input class="derecha" type="text" name="Buscar" placeholder="Buscar por Nombre
	">
	<br>
		<br>
	<table style="width:90%">
  <tr>
    <th>ID</th>
    <th>Estado</th>
    <th>Nombre</th>
    <th>Fecha I</th>
    <th>Fecha F</th>
    <th>Dirrecion</th>
    <th>Departamento</th>
    <th>Ciudad</th>
    <th></th>
    <th></th>
    <th></th>
  <?php 
  $obj= new Obra();
  $sql="SELECT * from obras join estado on estado.idEstado = obras.Estado_idEstado";
  $datos=$obj->ConsultarObra($sql);

  foreach ($datos as $key ) {
 ?>
  <tr>
    <td><?php echo $key['idObra']; ?></td>
    <td><?php echo $key['Estado_idEstado']; ?></td>
    <td><?php echo $key['NomObra']; ?></td>
    <td><?php echo $key['FecObraIni']; ?></td>
    <td><?php echo $key['FecObraFin']; ?></td>
    <td><?php echo $key['Dirrecion']; ?></td>
    <td><?php echo $key['Departamento']; ?></td>
    <td><?php echo $key['Ciudad']; ?></td>
    <td>
      <a href="Mod_Producto.php?id=<?php echo $key['idProducto'] ?>">
      Editar
      </a>
    </td>
    <td>
      <a href="php/eliminar.php?id=<?php echo $key['idProducto'] ?>">
      eliminar
      </a>
    </td>
  </tr>
<?php 
  }
 ?>
  </tr>
</table>

</form>
</div>
<br><br><br><br><br><br><br>
<center>
<section class="blue">

  <div class="wrapper">
            <table >
   <br>
                <br>
              <td colspan="2">

                <img src="../../../../imagenes/Logo_SOILING_Light.png">
              </td>

           <td>
             <ul class="pool">
               <li class="pool">Social Media</li>
               <li class="pool">facebook</li>
                    <li class="pool">Twiter</li>
                         <li class="pool">Instagram</li>
                            <li class="pool">Youtube</li>
             </ul>
           </td>
             <td>
             <ul class="pool">
               <li class="pool">Ubicacion</li>
               <li class="pool">Dirección e informaciónn de contacto.

</li>
                    <li class="pool">Dirección: Carrera 2B No. 69A – 35

</li>
                         <li class="pool">Correo: soilingsas@gmail.com

</li>
                            <li class="pool">Teléfono: (+57) 1 249 7675

</li>
             </ul>
           </td>
             <td>
             <ul class="pool">
               <li class="pool">Design:Tecdeluxe</li>
               <li class="pool">facebook</li>
                    <li class="pool">Twiter</li>
                         <li class="pool">Instagram</li>
                            <li class="pool">Youtube</li>
             </ul>
           </td>
            </table>
						<br><br>
       <div class="footer">
            <p>Copyright (c) 2019</p>
       </div>
       </section>
</center>
	</body>
</html>
