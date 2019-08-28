<?php 

	require_once "../Conexion/conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT *
			from producto where idProducto='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registro productos</title>
		<link rel="stylesheet" type="text/css" href="../../css/Estilo_inv.css">
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

		<br><br><br>
<center>
    <br>
    <br>
    <br>
		<br><br>
<h1>Registro de productos</h1>

<br>
<br>
  <div class="con">
    <br>
    <br>
		<form action="php/actualizar.php" method="post">

		  <table align="center" class="table">
		  	<input type="text" hidden="" value="<?php echo $id ?>" name="id">
		   <td>
		    Nombre:
		    <br> <input type="text"  sisze="30" maxlength="20" name="nombres"  title="solo se aceptan letras y minimo 6 letras" required value="<?php echo $ver[4] ?>">
		   </td>

		   <td>
		   Saldo:
		    <br><input type="text"  sisze="30" maxlength="15" name="Saldo" title="minimo 6 y maximo 15 digitos" required value="<?php echo $ver[6] ?>">
		   </td>
		   <tr></tr>

		   <td>
		    Valor:
		    <br><input type="text"  sisze="30" maxlength="15" name="Valor" title="minimo 6 y maximo 15 digitos" required value="<?php echo $ver[7] ?>"> 
		   </td>


		   <td>
		   Categoria:
		   <br>
		   <select required="" name="Categoria"  >
		   	<option value="0">Seleccione</option>
		  <option value="1">Tornillo </option>
		  <option value="2">Tuerca</option>
		   </select>
		   </td>
		    <tr></tr>
		      <td>
		     Ubicacion:
		     <br>
		     <input type="text" placeholder="ubicacion" sisze="30" maxlength="20" name="ubicacion" title="solo se permiten numeros y debe tener 20 digitos " required value="<?php echo $ver[8] ?>">
		   </td>


		   <td>
		     IVA:
		     <br>
		     <input type="text"  maxlength="15" name="iva"  title="solo se aceptan letras y minimo 6 y maximo 15 letras" required value="<?php echo $ver[9] ?>">
		   </td>
		   <tr></tr>
		   </td>
		    <td>
		   Marca:
		   <br>
		   <select required="" name="marca">
		   	<option value="0">Seleccione</option>
		  <option value="1">Torniplex</option>
		  <option value="2">Tornimax</option>
>
		   </select>
		   </td>
		    <tr></tr>
		    <td>
		   Unida de medida:
		   <br>
		   <select required="" name="Medida">
		  <option value="0">Ninguna</option>
		  <option value="1">Cm</option>
		  <option value="2">Mtros</option>
		  <option value="3">MM</option>
		   </select>
		  
		  </table>
		  Descripcion:
		  <br>
		  <input type="text"  cols="100" rows="5" required  name="txtDesc" value="<?php echo $ver[5] ?>">

		 
		  <br>
		  Comentario:
		 <br>
		  <input type="text" cols="100" rows="5" required  name="txtCom" value="<?php echo $ver[10] ?>">

		
		  <br>
		    <br>
		  <button class="button" type="submit">
		    Enviar
		  </button>
		   <button class="button">
		   Cancelar
		  </button>
		  </div>
		</form>
	<br><br><br>
	<section class="blue">

	  <div class="wrapper">
	            <table >
	   <br>
	                <br>
	              <td colspan="2">

	                <img src="../../imagenes/Logo_SOILING_Light.png">
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

</section>
<br><br>
<br>
<br></form>


	</body>
</html>
