<?php

 
  $user = $_POST['user_php'];
  $clave = $_POST['clave_php'];

  if(empty($user) || empty($clave)){

    echo 'error_1';

  }else{


    require_once('../model/usuario.php');

 
    $usuario = new Usuario();


    $usuario -> login($user, $clave);

 
  }


?>
