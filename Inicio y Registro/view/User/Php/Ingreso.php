<?php
include

$alta = new Alta_cliente();

$alta->add_cliente($_POST["nom"],$_POST["ape"],$_POST["emp"],$_POST["dir"],$_POST["email"],$_POST["tel"],$_POST["tipo_cliente"]);

?>