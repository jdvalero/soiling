<?php
  session_start();

  
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2 )  {

    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registro Clientes</title>
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
			 <li><a href="../../controller/cerrarSesion.php">Cerrar sesion</a></li>

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
<p>Nombre y Apellido :<input type="text"  maxlength="15" name="Nombre" | pattern="[A-Z a-z]{6,15}" title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
<br>
<br>
<!–-------------------- Dirrecion–------------------>
<p>Direccion :<input type="text"  sisze="30" maxlength="15" name="direccion" pattern="[A-Z a-z]{6,17}" title="minimo 6 y maximo 15 digitos" required></p>
<br>
<!–-------------------- Telefono–------------------>
<p>Telelefono :<input type="text" sisze="30" maxlength="7" name="Telefono" pattern="[0-9]{7}" title="solo se aceptan numros y 7 digitos" title="digitos del 0-9 y maximo 7" required></p>
<br>
<!–-------------------- Tipo de identificaiçcion–------------------>
<label>TIdentificacion :</label>
       <select required="">
        <option value="null">Seleccionar</option>
      <option value="CC">Cedula Ciudadania</option>
      <option value="CE">Cedula extranjera</option>
      <option value="NIT">Nit</option>
      <option value="CP">Cedula de permanencia</option>
       </select>
<br><br>
<label>
<!–-------------------- Numero de identificaiçcion–------------------>

NIdentificacion:
<input type="text" name="NIdentificacion" maxlength="10" pattern="[0-9]{5,10}" title="ingrese  solo numeros minimo 5 maximo 10 caracteres" required>
</label>
<br>
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
