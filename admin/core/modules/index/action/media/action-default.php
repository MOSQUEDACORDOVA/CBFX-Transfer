<?php
if(isset($_GET['tipo'])){
$tipo =$_GET['tipo'];
}
if(isset($_POST['tipo'])){
  $tipo =$_POST['tipo'];
  }
  if($tipo ==1){
      $clase =$_GET['c'];
      $tabla = $_GET['t'];
      $datos = new $clase(); 
      $result=[];
      
      switch($_SERVER["REQUEST_METHOD"]) {
          case "GET":
              $result = $datos->getAllFotos($tabla);
              break;
      }
      
      header("Content-Type: application/json");
      echo json_encode($result);
      }
  
    
?>
