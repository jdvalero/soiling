<!DOCTYPE html>
<html>
	<head>
		<title>Registro Clientes</title>
		<link rel="stylesheet" type="text/css" href="../../../../../css/Estilo_reg_cli.css">
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
            <li><a href="Con_Usuarios.php">Consulta Usuario</a></li>
          <li><a href="#">Modificar Usuario</a></li>
        </ul>
       </li>
         <li><a href="../../../../controller/cerrarSesion.php">Cerrar sesion</a></li>

      </ul>

    </nav>
		</div>
	</header>

<br><br><br>
<br><br><br><br>
<center>


	<br><br>
<div class="container">
	<br>
		<br>

<h1>
	Datos Usuario
	</h1>

<br><br>


<form action="Registro" method="post">
  <p>ID :<input type="text"  maxlength="15" name="Nombre" | pattern="[A-Z a-z]{6,15}" title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
<br>
<br>
<p>Nombre y Apellido :<input type="text"  maxlength="15" name="Nombre" | pattern="[A-Z a-z]{6,15}" title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
<br>
<br>
<p>Direccion :<input type="text"  sisze="30" maxlength="15" name="direccion" pattern="[A-Z a-z]{6,17}" title="minimo 6 y maximo 15 digitos" required></p>
<br>
<p>Telelefono :<input type="text" sisze="30" maxlength="7" name="fijo" pattern="[0-9]{7}" title="solo se aceptan numros y 7 digitos" title="digitos del 0-9 y maximo 7" required></p>
<br>
<label>TIdentificacion :</label>
       <select required="">
        <option value="volvo">Seleccionar</option>
      <option value="volvo">Cedula Ciudadania</option>
      <option value="saab">Cedula extranjera</option>
      <option value="mercedes">Nit</option>
      <option value="audi">Cedula de permanencia</option>
       </select>
<br><br>
<label>
NIdentificacion:
<input type="text" name="Nombre" maxlength="10" pattern="[0-9]{5,10}" title="ingrese  solo numeros minimo 5 maximo 10 caracteres" required>
</label>
<br>
<br>
<label>
Email:
<input type="email" name="Nombre" required="">
</label>
<br>
<br>
<label>
Cargo:
<input type="text"  maxlength="15" name="Nombre" | pattern="[A-Z a-z]{6,15}" title="solo se aceptan letras y minimo 6 y maximo 15 letras" required>
</label>
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
