<?php
$clase =$_GET['c'];
$tabla = $_GET['t'];
$datos = new $clase(); 
$result=[];

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $datos->getAllDatos($tabla);
        break;
}

header("Content-Type: application/json");
echo json_encode($result);
?>
