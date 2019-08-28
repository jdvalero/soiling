<?php
  session_start();

  
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 3 )  {

    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registro Clientes</title>
    <input type="text" name="usuario" value="<?php echo $_SESSION['id'] ?>" hidden="">
    <?php require_once "../../../Procesos/Conexion/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();
    $sql="SELECT idTipoDocumento,NomDocumento
    from tipodocumento";
    $result=mysqli_query($conexion,$sql);
    ?>
		<link rel="stylesheet" type="text/css" href="../../../css/Estilo_reg_cli.css">
	</head>
	<body>

		<header >
		<div class="wrapper1">
			<div class="logo1">
				Soiling
			</div>
			<nav class="nav">
			<ul class="menu">

        <li> <a href="../../../index_inicio.php">Inicio</a> </li>


        <li><a href="#">Registros</a>
        <ul class="submenu">

          
      
          <li><a href="../../../Procesos/Producto/Reg_productos.php">Registrar producto</a></li>
         
          <li><a href="../../../Procesos/Pedidos/Pedido.php">Pedido</a></li>

          <li><a href="#">R.Usuarios</a></li>
          
      
        </ul>
        </li>
          <ul class="submenu">
           
           
           
        
          </ul>
        </li>
        <li><a href="#">Gestiones</a>
        <ul class="submenu">
            <li><a href="../../../Procesos/Producto/Con_Producto.php">Gestion de bodega</a></li>
            <li><a href="../../../Procesos/Pedidos/Con_Pedidos.php">Control pedidos</a></li>
            
        </ul>
       </li>
       <li><a href="../../../inicio y Registro/controller/cerrarSesion.php">Cerrar sesion</a></li>

      </ul>

		</nav>
		</div>
	</header>

<br><br><br>
<br><br><br><br>
<center>

	<p>Por favor termine de rellenar los siguientes datos</p>
	<br><br>
<div class="container">
	<br>
		<br>

<h1>
	Datos Usuario
	</h1>

<br><br>


<form action="php/ingreso.php" method="post">

<!–-------------------- Nombre–------------------>
<label>TIdentificacion :</label>
       <select class="form-control input-sm" id="TISelectU" name="TI">
      <option value="A">Tipo Identificacion</option>
      <?php 
     $sql="SELECT idTipoDocumento,NomDocumento
    from tipodocumento";
      $result=mysqli_query($conexion,$sql);
      ?>
      <?php while($ver=mysqli_fetch_row($result)): ?>
      <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
      <?php endwhile; ?>
      </select>
<br><br>
<label>
  NIdentificacion:
<input type="text" name="NI" maxlength="10" pattern="[0-9]{5,10}" title="ingrese  solo numeros minimo 5 maximo 10 caracteres" required>
</label>
<br><br>
<p>Nombre y Apellido :<input type="text"  maxlength="15" name="Nombre" | pattern="[A-Z a-z]{6,15}" title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
<br>
<br>
<!–-------------------- Dirrecion–------------------>
<p>Direccion :<input type="text"  sisze="30" maxlength="15" name="direccion" pattern="[A-Z a-z]{6,17}" title="minimo 6 y maximo 15 digitos" required></p>
<br>
<!–-------------------- Telefono–------------------>
<p>Telelefono :<input type="text" sisze="30" maxlength="7" name="Telefono" pattern="[0-9]{7}" title="solo se aceptan numros y 7 digitos" title="digitos del 0-9 y maximo 7" required></p>
<br>


<!–-------------------- Email –------------------>
<label>
Email:
<input type="email" name="Email" required="">
</label>
<br>
<br>
<br>
<br>
<br>
<br>
<input type="submit" name="button" class="button" placeholder="Ingresar
" value="Confirmar">
<input type="submit" name="button" class="button" placeholder="Ingresar
" value="Cancelar">	<br><br>

</form>
</div>
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

                <img src="../../../imagenes/Logo_SOILING_Light.png">
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
