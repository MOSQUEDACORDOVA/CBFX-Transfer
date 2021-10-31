<?php
$clase =$_GET['c'];
$dato = $_GET['t'];
$datos = new $clase(); 
$result=[];

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $datos->getDato($dato);
        break;
}

header("Content-Type: application/json");
echo json_encode($result);
?>
