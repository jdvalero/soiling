<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/admin/index_inicio.php');
    
  }else if($_SESSION['cargo'] == 2){
    header('location: ../../index_inicio.php');

    
  }elseif($_SESSION['cargo'] == 3){
    header('location: ../../index_inicio.php');
  }
 ?>
