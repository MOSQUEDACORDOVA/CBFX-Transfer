<?php
if(isset($_POST['tipo'])){
  $tipo =$_POST['tipo'];
  }
if(isset($_GET['tipo'])){
$tipo =$_GET['tipo'];
}
if($tipo ==1){

  $c1 = $_POST['c1']; $c15 = $_POST['c15'];
  $c2 = $_POST['c2']; $c16 = $_POST['c16'];
  $c3 = $_POST['c3']; $c17 = $_POST['c17'];
  $c4 = $_POST['c4']; $c18 = $_POST['c18'];
  $c5 = $_POST['c5']; $c19 = $_POST['c19'];
  $c6 = $_POST['c6']; $c20 = $_POST['c20'];
  $c7 = $_POST['c7']; $c21 = $_POST['c21'];
  $c8 = $_POST['c8']; $c22 = $_POST['c22'];
  $c9 = $_POST['c9']; $c23 = $_POST['c23'];
  $c10 = $_POST['c10']; $c24 = $_POST['c24'];
  $c11 = $_POST['c11']; $c25 = $_POST['c25'];
  $c12 = $_POST['c12']; $c26 = $_POST['c26'];
  $c13 = $_POST['c13']; $c27 = $_POST['c27'];
  $c14 = $_POST['c14']; $c28 = $_POST['c28'];

  $canada  = new CanadaData(); 
      $canada->c1 = $c1;   $canada->c11 = $c11;    $canada->c12 = $c12;  
      $canada->c2 = $c2;    $canada->c13 = $c13;    $canada->c14 = $c14;  
      $canada->c3 = $c3;    $canada->c15 = $c15;    $canada->c16 = $c16;  
      $canada->c4 = $c4;    $canada->c17 = $c17;    $canada->c18 = $c18;  
      $canada->c5 = $c5;    $canada->c19 = $c19;    $canada->c20 = $c20;  
      $canada->c6 = $c6;   $canada->c21 = $c21;  $canada->c22 = $c22; 
      $canada->c7 = $c7;   $canada->c23 = $c23;  $canada->c24= $c24; 
      $canada->c8 = $c8;   $canada->c25 = $c25;  $canada->c26 = $c26; 
      $canada->c9 = $c9;   $canada->c27 = $c27;  $canada->c28 = $c28; 
      $canada->c10 = $c10;   
     
      $canada->update();
  echo "1"; 

}
if($tipo ==5){
$clase =$_GET['c'];
$datos = new $clase(); 
$result=[];

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $datos->getAll(1);
        break;
}

header("Content-Type: application/json");
echo json_encode($result);
}
if($tipo ==6){
  $idSeccionTab =$_GET['idSeccionTab'];
  $clase =$_GET['c'];
  $datos = new $clase(); 
  $result=[];
  
  switch($_SERVER["REQUEST_METHOD"]) {
      case "GET":
          $result = $datos->getAllSecciones($idSeccionTab);
          break;
  }
  
  header("Content-Type: application/json");
  echo json_encode($result);
  }

  if($tipo ==7){
    $clase =$_GET['c'];
    $datos = new $clase(); 
    $result=[];
    
    switch($_SERVER["REQUEST_METHOD"]) {
        case "GET":
            $result = $datos->getAllEnlacesActivos();
            break;
    }
    
    header("Content-Type: application/json");
    echo json_encode($result);
    }
    if($tipo ==8){
      $idSeccionTab =$_GET['idSeccionTab'];
      $clase =$_GET['c'];
      $datos = new $clase(); 
      $result=[];
      
      switch($_SERVER["REQUEST_METHOD"]) {
          case "GET":
              $result = $datos->getAllMenu($idSeccionTab);
              break;
      }
      
      header("Content-Type: application/json");
      echo json_encode($result);
      }
?>
