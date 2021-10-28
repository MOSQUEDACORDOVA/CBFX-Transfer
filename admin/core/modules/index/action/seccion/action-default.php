<?php
if(isset($_GET['tipo'])){
$tipo =$_GET['tipo'];
}
if(isset($_POST['tipo'])){
  $tipo =$_POST['tipo'];
  }

  if($tipo ==2){
    $textSeccion = $_POST['textSeccion'];
    $id = $_POST['id'];
    $canada  = new SeccionData(); 
    $canada->id =  $id;
    $canada->textSeccion =  $textSeccion;
    $canada->update();
    echo "1"; 
    
  }
  
if($tipo ==3){
$clase =$_GET['c'];
$tabla = $_GET['t'];
$datos = new $clase(); 
$result=[];

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $datos->getDataSeccion($tabla);
        break;
}

header("Content-Type: application/json");
echo json_encode($result);
}

if($tipo==4){
  $titulo = $_POST['titulo'];
  $canada  = new SeccionData(); 
  $canada->titulo =  $titulo;
  $canada->add();
  echo "1"; 
  
}
if($tipo==5){
  $id = $_POST['id'];
  $tema = $_POST['tema'];
  $canada  = new SeccionData(); 
  $canada->idSeccionTab =  $id;
  $canada->titulo =  $tema;
  $canada->texto = "";
  $canada->addTema();
  echo "1"; 
  
}

if($tipo==6){
  $id = $_POST['id'];
  $canada  = new SeccionData(); 
  $canada->id =  $id;  
  $canada->delTema();
  echo "1"; 
  
}

if($tipo==7){
  $id = $_POST['id'];
  $canada  = new SeccionData(); 
  $canada->id =  $id;  
  $canada->delSeccion();
  echo "1"; 
  
}
if($tipo==10){
  $caption = $_POST['caption'];
  $enlace = $_POST['enlace'];
  $canada  = new SeccionData(); 
  $canada->caption =  $caption;  
  $canada->enlace =  $enlace; 
  $canada->addEnlace();
  echo "1"; 
  
}
if($tipo==11){
  $id = $_POST['id'];
  $canada  = new SeccionData(); 
  $canada->id =  $id;  
  $canada->delBoton();
 
  
}

if($tipo ==12){
  $id = $_POST['id'];
  $caption = $_POST['caption'];
  $enlace = $_POST['enlace'];
  $canada  = new SeccionData();
  $canada->id =  $id;  
  $canada->caption =  $caption;  
  $canada->enlace =  $enlace; 
  $canada->updateEnlaces();
  echo "1"; 
  
}

?>
