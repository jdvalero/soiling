<!DOCTYPE html>
<html>
	<head>
		<title>Registro de obras</title>
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
          <li><a href="reg_Obras.php">Registrar Obra</a></li>
          <li><a href="Mod_Obra.php">Modificar Obra</a></li>
          <li><a href="Con_Obra.php">Consultar Obra</a></li>
        </ul>
        </li>
         <li><a href="#">Usuarios</a>
          <ul class="submenu">
            <li><a href="../Usuarios/Con_Usuarios.php">Consulta Usuario</a></li>
          <li><a href="../Usuarios/Mod_Usuario.php">Modificar Usuario</a></li>
        </ul>
       </li>
        <li><a href="../../../../controller/cerrarSesion.php">Cerrar sesion</a></li>

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
Crear Obras
	</h1>
<br><br>
	<form action="php/ingreso.php" method="post">
	<label>
	Nombre proyecto:
	<input type="text"  sisze="30" maxlength="20" name="nombre" pattern="[A-Za-z]{6,}" title="solo se aceptan letras y minimo 6 letras" required>
	</label>
	<br>
	<br>
	<label>
	Ciudad:
	<input type="text"  sisze="30" maxlength="20" name="ciudad"pattern="[A-Za-z]{6,}" title="solo se aceptan letras y minimo 6 letras" required>
	</label>
	<br>
	<br>
	<label>
	Departamento:
	<input type="text"  sisze="30" maxlength="20" name="departamento"pattern="[A-Za-z]{6,}" title="solo se aceptan letras y minimo 6 letras" required>
	</label>
	<br>
	<br>
	<label>
	Direccion:
	<input type="text"  sisze="30" maxlength="10" name="direccion" required></label>
	
	<br>
	<br>
	<label>
	Responsable:
	    <select required="">
        <option name="responsable">Seleccionar Responsable</option> 
      
       </select>
	</label>
	<br>
	<br>
	<label>
	Fecha De inicio:
	<input type="date" placeholder="telefono fijo" sisze="30" maxlength="7" name="inicio" pattern="[0-9]{7}" title="solo se aceptan numros y 7 digitos" required>
	</label>
	<br>
	<br>
	<label>
	Fecha De FIN:
	<input type="date" placeholder="telefono fijo" sisze="30" maxlength="7" name="fin" pattern="[0-9]{7}" title="solo se aceptan numros y 7 digitos" required>
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
						<br><br><br>
       <div class="footer">
            <p>Copyright (c) 2019</p>
       </div>
       </section>
</center>
</center>
	</body>
</html>
