<?php
  session_start();

  
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 3 )  {

	header('location:index.php');
	
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>SOILING</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
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


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="Procesos/Producto/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="Procesos/Pedidos/Pedido.php">Pedido</a></li>

           <li><a href="Inicio y Registro/view/User/Reg_Clientes.php">R.Usuarios</a></li>
          
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="Procesos/Producto/Con_Producto.php">Gestion de bodega</a></li>
            <li><a href="Procesos/Pedidos/Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       
       </li>
   
        

       <li><a href="inicio y Registro/controller/cerrarSesion.php">Cerrar sesion</a></li>

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
<div class="container">
	<br>
	<h1 class="textoslargos">
	Servicios
	</h1>
	<br>

	<table>
		<td></td>
			<td></td>
				<td></td>
		<td>
			<div class="imagen">
	<div class="info">
		<p class="headline">MOVIMIENTO DE TIERRAS</p>
		<p class="info2">Planificamos y ejecutamos movimientos de tierra por medios mecánicos, con el fin de mejorar rendimientos en los diferentes procesos constructivos que dependen de esta actividad. ¿Necesitas planificación y/o asesoría sobre prerrequisitos para la ejecución de trabajos de replanteo, accesos para maquinaria, camiones, rampas, etc.? Pide una cita con nosotros.

</p>
	</div>
		</td>
		<td>
			<div class="imagen2">
	<div class="info">
		<p class="headline">POZOS DRENANTES</p>
		<p class="info2">Aumentamos la seguridad del terreno con el mejoramiento de sus propiedades mecánicas, mediante la construcción de pozos drenantes que cumplen la función de captar el agua subterránea, gracias a que implementamos drenes radiales sub-horizontales alrededor de su zona aferente. ¿Necesitas saber más? Ponte en contacto con nosotros.

</p>
	</div>
		</td>
		<td>
			<div class="imagen3">
	<div class="info">
		<p class="headline">CIMENTACIONES ESPECIALES</p>
		<p class="info2">subespecialidades? Acá te dejamos algunos de ellos: – Muros pantalla. – Pilotes convencionales. – Pilotes de gran diámetro. – Micropilotes. – Anclajes provisionales y permanentes de cable o barra, con sistemas     de protección frente a corrosión. En Soiling podemos asesorar y ejecutar la cimentación que más se adapte a tu necesidad.



</p>
	</div>
		</td>
	</table>
</div>
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
