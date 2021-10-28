<?php
$clase =$_GET['c'];
$dato = $_POST['id'];
$dato2 = $_POST['archivo'];
$datos = new $clase(); 
$datos->idGuia = $dato;
$datos->archivo = $dato2;
 $datos->addFoto();
 //echo "1";
?>
