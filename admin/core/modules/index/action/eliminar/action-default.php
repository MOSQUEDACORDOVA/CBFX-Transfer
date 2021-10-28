<?php
$clase =$_GET['c'];
$dato = $_POST['id'];
$datos = new $clase(); 
$datos->id = $dato;
 $datos->del();
 echo "1";
?>
