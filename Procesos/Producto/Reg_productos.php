<?php 
session_start();
if(isset($_SESSION['id'])){
   }

  ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Registro productos</title>
		<input type="text" name="usuario" value="<?php echo $_SESSION['id'] ?>" hidden="">
    <?php require_once "../Conexion/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();
    $sql="SELECT idUnidademedida,Nom_medida
    from unidademedida";
    $result=mysqli_query($conexion,$sql);
    ?>
    <?php require_once "../Conexion/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();
    $sql="SELECT idMarca,Nom_marca
    from marca";
    $result=mysqli_query($conexion,$sql);
    ?>
    <?php require_once "../Conexion/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();
    $sql="SELECT IdCategoria,Nom_categoria
    from categoria";
    $result=mysqli_query($conexion,$sql);
    ?>     
   
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

				<li> <a href="../../index_inicio.php">Inicio</a> </li>


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="../Productos/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="../Pedidos/Pedido.php">Pedido</a></li>

          <li><a href="../../Inicio y Registro/view/User/Reg_Clientes.php">R.Usuarios</a></li>
          
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="Con_Producto.php">Gestion de bodega</a></li>
            <li><a href="../Pedidos/Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       </li>
       <li><a href="inicio y Registro/controller/cerrarSesion.php">Cerrar sesion</a></li>

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
		<form action="php/insertar.php" method="post">

		  <table align="center" class="table">
		   <td>
		    Nombre:
		    <br> <input type="text"  sisze="30" maxlength="20" name="nombres"  title="solo se aceptan letras y minimo 6 letras" required>
		   </td>

		   <td>
		   Saldo:
		    <br><input type="text"  sisze="30" maxlength="15" name="Saldo" title="minimo 6 y maximo 15 digitos" required>
		   </td>
		   <tr></tr>

		   <td>
		    Valor:
		    <br><input type="text"  sisze="30" maxlength="15" name="Valor" title="minimo 6 y maximo 15 digitos" required>
		   </td>


		   <td>
		   Categoria:
		   <br>
		   <select class="form-control input-sm" id="categoriaSelectU" name="Categoria">
			<option value="A">Selecciona marca</option>
			<?php 
			$sql="SELECT IdCategoria,Nom_categoria
    		from categoria";
			$result=mysqli_query($conexion,$sql);
			?>
			<?php while($ver=mysqli_fetch_row($result)): ?>
			<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
			<?php endwhile; ?>
			</select>
		   </td>
		    <tr></tr>
		      <td>
		     Ubicacion:
		     <br>
		     <input type="text" placeholder="ubicacion" sisze="30" maxlength="20" name="ubicacion" title="solo se permiten numeros y debe tener 20 digitos " required>
		   </td>


		   <td>
		     IVA:
		     <br>
		     <input type="text"  maxlength="15" name="iva"  title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
		   </td>
		   <tr></tr>
		    <td>
		   Bodega:
		   <br>
		   <select required="">
		   	<option value="volvo">Seleccione</option>
		  <option value="volvo">Chirajara</option>
		  <option value="saab">Bogota</option>
		  <option value="mercedes">La grande</option>
		  <option value="audi">Madrid</option>
		   </select>
		   </td>
		    <td>
		   Marca:
		   <br>
		  	 <select class="form-control input-sm" id="marcaSelectU" name="marca">
			<option value="A">Selecciona marca</option>
			<?php 
			$sql="SELECT idMarca,Nom_marca
    		from marca";
			$result=mysqli_query($conexion,$sql);
			?>
			<?php while($ver=mysqli_fetch_row($result)): ?>
			<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
			<?php endwhile; ?>
			</select>
		   </td>
		    <tr></tr>
		    <td>
		   Unida de medida:
		   <br>

		   <select class="form-control input-sm" id="unidadSelectU" name="Medida">
			<option value="A">Selecciona unidad</option>
			<?php 
			$sql="SELECT idUnidademedida,Nom_medida
   			 from unidademedida";
			$result=mysqli_query($conexion,$sql);
			?>
			<?php while($ver=mysqli_fetch_row($result)): ?>
			<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
			<?php endwhile; ?>
			</select>
		  
		  </table>
		  Descripcion:
		  <br>
		  <textarea cols="100" rows="5" required  name="txtDesc">

		  </textarea>
		  <br>
		  Comentario:
		 <br>
		  <textarea cols="100" rows="5" required  name="txtCom">

		  </textarea>
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
