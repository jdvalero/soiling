<?php

  session_start();

  if(isset($_SESSION['id'])){
    header('location: ../inicio y Registro/controller/redirec.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="../images/logo.ico">
    <meta charset="utf-8">
    <title>Login en PHP</title>
  <link rel="stylesheet" href="../assets/css/main.css" />
  <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="../css/estilo_inicio1.css">

  </head>

  <body class="index is-preload">
  <div id="page-wrapper">
		<header >
		<div class="wrapper1">
			<div class="logo1">
				Soiling
			</div>
			<nav class="nav">
			<ul class="menu">



				<li><a href=../index.php>Inicio</a>

			 <li><a href="registrar.php">Registrate</a></li>
			 <li><a href="index.php">Iniciar Sesion</a></li>

			</ul>

		</nav>
		</div>
		</header>
<br>


<section class="fondo">

	<hr width="400" height="10009" color="white">
	<br>
	<br>


<center>

<a name="abajo"></a>
</center>
</section>
  <div >
  <center>
<br>
<h2>Registrarse</h2>
<br>
<br>
</center>

    <!-- Formulario Login -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
         <br>
          <!-- Estructura del formulario -->
         
            <form id="formulario_registro">
            <!-- Estructura del formulario -->
            <fieldset>

              
<section class="text-accent center">
              <div class="spacing-2"></div>
               </section>
              <h5>
               Nombre
              </h5>
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
<section class="text-accent center">
              <div class="spacing-2"></div>
               </section>
              <h5>
               Email
              </h5>
              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Email</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="email" placeholder="Ingresa tu email">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
<section class="text-accent center">
              <div class="spacing-2"></div>
               </section>
              <h5>
               Contraseña
              </h5>
              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Ingresa tu clave">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>
<section class="text-accent center">
              <div class="spacing-2"></div>
               </section>
              <h5>
              Verificar contraseña
              </h5>
              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
              </div>
<br>
              <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
              <!-- Fin load -->

              <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<br>
<br>
<br>
<section class="blue">

  <div class="wrapper">
  	<br>
  	<br>
  	<center>
<h4>Ya estas registrado?</h4>

<h4><a href="#"></a>Iniciar seccion</h4>
</center>
<br>
  	<br>
</div>
       </section>
</center>


    </div>
    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/jquery.dropotron.min.js"></script>
      <script src="../assets/js/jquery.scrolly.min.js"></script>
      <script src="../assets/js/jquery.scrollex.min.js"></script>
      <script src="../assets/js/browser.min.js"></script>
      <script src="../assets/js/breakpoints.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>
  </body>
</html>
