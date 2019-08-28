<!DOCTYPE html>
<html>
	<head>
		<title>Movimiento</title>
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



<li> <a href="index2.html">Inicio</a> </li>


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="../Productos/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="../Pedidos/Pedido.php">Pedido</a></li>
          <li><a href="cre_almacen.html">Crear Almacen</a></li>
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="../Bodega/inventario.php">Gestion de bodega</a></li>
            <li><a href="../Pedidos/Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       </li>
       <li><a href="index.html">Cerrar sesion</a></li>

      </ul>
		</nav>
		</div>
	</header>

<br><br><br><br><br>
<br><br>
<center>
<div class="container">
	<a href="inventario.html"><img src="../../imagenes/volver.png" width="40" height="40"></a>
	<br>
		<br>
<h1>
Realizar movimiento
	</h1>

<br>
<form action="Registro" method="post">
<label>Tipo
       <select required="">
        <option value="volvo">Seleccionar</option>
      <option value="volvo">Entrada</option>
      <option value="saab">Salida</option>
       </select>
       </label>
	<br><br>

<label>
Fecha
<input type="date" name="Nombre" >
</label>

<br>
<br>
<label>
Origen
       <select required="" class="derecha">
        <option value="volvo">Seleccionar Bodega</option>
      <option value="volvo">Chirajara</option>
      <option value="saab">Bogota</option>
      <option value="mercedes">La grande</option>
      <option value="audi">Madrid</option>
       </select>
</label>
<br><br>
<label>
Destino
       <select required="" class="derecha">
        <option value="volvo">Seleccionar Bodega</option>
      <option value="volvo">Chirajara</option>
      <option value="saab">Bogota</option>
      <option value="mercedes">La grande</option>
      <option value="audi">Madrid</option>
       </select>
</label>
<br>
<br>
<label>
Empresa encargada
       <select required="" class="derecha">
        <option value="volvo">Seleccionar</option>
      <option value="volvo">Flyemirrates</option>
      <option value="saab">Traslantantico</option>
      <option value="mercedes">La grandeViajes</option>
      <option value="audi">Viajemos</option>
       </select>
</label>
<br>
<br>
<label>
Cantidad:
<input type="text" name="Nombre" required pattern="[0-9]{7-15}" title="Porfavor Ingresar Menos de 40 caracteres">
</label>
<br>
<br>
<br>

Comentarios:
<br>
<textarea cols="40" rows="6">

</textarea>
<br>
<br>
<input type="submit" name="button" class="button" placeholder="Ingresar
" value="Confirmar">
<input type="submit" name="button" class="button" placeholder="Ingresar
" value="Cancelar">	<br><br>


</center>
<br>
<br>

<br>
<br><br><br>
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
						<br><br><br>
       <div class="footer">
            <p>Copyright (c) 2019</p>
       </div>
       </section>
</center>
</center>
	</body>
</html>
