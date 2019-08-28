<?php 
  require_once "../Conexion/conexion.php";
  require_once "Clase/usuario.php";
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Usuarios</title>
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
          <li><a href="../Obras/reg_Obras.php">Registrar Obra</a></li>
          <li><a href="../Obras/Mod_Obra.php">Modificar Obra</a></li>
          <li><a href="../Obras/Con_Obra.php">Consultar Obra</a></li>
        </ul>
        </li>
         <li><a href="#">Usuarios</a>
          <ul class="submenu">
            <li><a href="#">Consulta Usuario</a></li>
          <li><a href="Mod_Usuario.php">Modificar Usuario</a></li>
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

	<h1>Usuarios</h1>
	<br>
	<input class="derecha" type="text" name=" Buscar" placeholder="Buscar Documento">
	<br>
	<br>
	<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>TIdentificacion</th>
    <th>Identificacion</th>>
    <th>Dirrecion</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Cargo</th>
    <th>Estado</th>
  </tr>
  <?php 
  $obj= new usuario();
  $sql="SELECT * from persona join estado on persona.Estado_idEstado=estado.idEstado join tipodocumento on persona.TipoDocumento_idTipoDocumento = tipodocumento.idTipoDocumento join tipocargo on persona.TipoCargo_idUsuario = tipocargo.idUsuario";
  $datos=$obj->ConsultarProduto($sql);

  foreach ($datos as $key ) {
 ?>
  <tr>
    <td><?php echo $key['idPersona']; ?></td>
    <td><?php echo $key['Estado']; ?></td>
    <td><?php echo $key['Tipo_documento']; ?></td>
    <td><?php echo $key['Cargo']; ?></td>
    <td><?php echo $key['Nom_producto']; ?></td>
    <td><?php echo $key['Doc_persona']; ?></td>
     <td><?php echo $key['nom_persona']; ?></td>
      <td><?php echo $key['Direccion']; ?></td>
       <td><?php echo $key['Email']; ?></td>
        
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

                <img src="imagenes/Logo_SOILING_Light.png">
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
