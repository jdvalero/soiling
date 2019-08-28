<?php
    include ("../conexiones/conexion1.php");

    $name = $_POST['name'];
    
    $subject = $_POST['subject'];
    $message = $_POST['message'];

echo $name. "a dicho </br>". $message;
mail('m11mario11m@gmail.com',$subject,$message);

?>