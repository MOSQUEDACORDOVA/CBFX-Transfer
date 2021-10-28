<?php
$clase =$_POST['c'];
$dato = $_POST['id'];
$dato2 = $_POST['foto'];
$datos = new $clase(); 
$datos->id = $dato;
$datos->archivo = $dato2;
$datos->del();
 echo "1";
?>
