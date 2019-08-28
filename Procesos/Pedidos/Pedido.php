<!DOCTYPE html>
<html>
	<head>
		<title>Pedido</title>
		<link rel="stylesheet" type="text/css" href="../../css/Estilo_reg_cli.css">
	</head>
	<body>

		<header >
		<div class="wrapper1">
			<div class="logo1">
				Soiling
			</div>
			<nav class="nav">
			<ul class="menu">


<li> <a href="../../index_inicio.php">Inicio</a> </li>


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="../Producto/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="#">Pedido</a></li>

          <li><a href="../../Inicio y Registro/view/User/Reg_Clientes.php">R.Usuarios</a></li>
          
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="../Producto/Con_Producto.php">Gestion de bodega</a></li>
            <li><a href="Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       </li>
       <li><a href="inicio y Registro/controller/cerrarSesion.php">Cerrar sesion</a></li>

      </ul>
		</nav>
		</div>
	</header>

<br><br><br><br><br>
<br><br>
<center>
<div class="container">
	<br>
		<br>
<h1>
	Pedido
	</h1>


	<form action="php/insertar.php" method="post">
     <td>
       
       Obras:
       <br>
       <select required="" name="obra">
        <option value="0">Seleccione</option>
      <option value="1">chirajara</option>
      <option value="2">bogota</option>
       <option value="3">cauca</option>
       </select>
       </td>
	
	<br>
	<br>
	Digite su pedido :
	<br>
	<textarea cols="40" rows="8" required name="pedido">

	</textarea>
	<br>
	<br>
	<input type="submit" name="button" class="button" placeholder="Ingresar
	" value="Confirmar">
	<input type="submit" name="button" class="button" placeholder="Ingresar
	" value="Cancelar">	

	</form>
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
</center>
	</body>
</html>
