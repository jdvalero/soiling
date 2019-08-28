<?php
  session_start();

  
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1 )  {

    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>SOILING(ADMIN)</title>
		<link rel="stylesheet" type="text/css" href="../../../css/style_ADMIN.css">
	</head>
	<body>
		<header >
		<div class="wrapper1">
			<div class="logo1">
				Soiling
			</div>
			<nav class="nav">
      <ul class="menu">

        <li> <a href="#">Inicio</a> </li>
        <li><a href="#">Obras</a>
        <ul class="submenu">
          <li><a href="Procesos/Obras/reg_Obras.php">Registrar Obra</a></li>
          <li><a href="Procesos/Obras/Mod_Obra.php">Modificar Obra</a></li>
          <li><a href="Procesos/Obras/Con_Obra.php">Consultar Obra</a></li>
        </ul>
        </li>
         <li><a href="#">Usuarios</a>
          <ul class="submenu">
            <li><a href="Procesos/Usuarios/Con_Usuario.php">Consulta Usuario</a></li>
          <li><a href="Procesos/Usuarios/Mod_Usuario.php">Modificar Usuario</a></li>
        </ul>
       </li>
         <li><a href="../../controller/cerrarSesion.php">Cerrar sesion</a></li>

      </ul>

    </nav>
		</div>
	</header>
		<section class="fondo">
			<hr width="400" height="10009" color="white">
			<br>
			<br>
			<h3>GEOTECNIA DE TUNELES Y EXCAVACIONES SUBTERRANEAS</h3>
			<center>
				<button class="button1"><a href="#abajo">Ver mas ...</a></button>
				<a name="abajo"></a>
			</center>
		</section>

<br><br><br><br><br>
<center>
<div class="Simple">
	<br>
 <h2>Hola administrador <strong><?php echo ucfirst($_SESSION['nombre']); ?></strong></h1>
 	<br>

 	</div>
 	</center>
 	<br><br><br>
	<center>
<div class="container1">
	<br>
	<h1 class="textoslargos">
ADMIN
	</h1>
	<br>

	<table>
		<td></td>
			<td></td>
				<td></td>
		<td>
			
	
		<p>USUARIOS</p>
		<p>
		Le permite consultar modfiicar y habilitar a las personas las cuales seran lso usuarios del aplicativo 

</p>
	
		</td>
		<td>
			

		<p>Obras</p>
		<p>Le permite genstionar las obras  de una manerta correcata sin presentar errores a nivel de administracion

</p>
	</div>

	</table>
</div>
<br>
<br>
<br><br>
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

</center>

	</body>
</html>
