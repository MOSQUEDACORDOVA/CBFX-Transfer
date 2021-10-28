<?php
if(isset($_GET['tipo'])){
$tipo =$_GET['tipo'];
}
if(isset($_POST['tipo'])){
  $tipo =$_POST['tipo'];
  }
if($tipo ==1){
 

$user = new UserData(); 
$codigo = $user->radomPassword();

  $idTipo = $_POST['idTipo'];
  $titulo = $_POST['titulo'];
  $entradaBlog = $_POST['entrada'];
  $fecha = $_POST['fecha'];
  $destacado = $_POST['destacado'];
  $slider = $_POST['slider'];  
  $archivo = $_POST['ruta3'];
  $ruta1 = $_POST['ruta1'];
  $ruta2 = $_POST['ruta2'];
  $ruta3 = $_POST['ruta3'];
  $ruta4 = $_POST['ruta4'];
  
      $entrada  = new EntradaData(); 
      $entrada->codigo = $codigo;  
      $entrada->idTipo = $idTipo;  
      $entrada->titulo = $titulo;
      $entrada->entradaBlog = $entradaBlog; 
      $entrada->fecha = $fecha; 
      $entrada->destacado = $destacado;
      $entrada->slider = $slider;  
     
      $entrada->add();
      $t = $entrada->foundId($codigo);
      $id =$t->id;
      $i=0;
      $rutas = array($ruta1, $ruta2, $ruta3, $ruta4);
      $longitud = count($rutas);
    for($i=0; $i<$longitud; $i++)
      {
        $data  = new MediaDataBlog(); 
        $data->idEntrada = $id;     
        $data->add($rutas[$i]);
      }

  echo "1"; 

}
if($tipo ==2){
  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $entradaBlog = $_POST['entradaBlog'];

  $entrada  = new EntradaData();

  $entrada->id = $id;  
  $entrada->titulo = $titulo;  
  $entrada->entradaBlog = $entradaBlog;   
  $entrada->update();
  echo "1"; 
}

if($tipo ==3){
  $clase =$_GET['c'];
  $tabla = $_GET['t'];
  $datos = new $clase(); 
  $result=[];
  
  switch($_SERVER["REQUEST_METHOD"]) {
      case "GET":
          $result = $datos->getAllDatosTodas($tabla);
          break;
  }
  
  header("Content-Type: application/json");
  echo json_encode($result);
  }

  if($tipo ==4){
    $clase =$_GET['c'];
    $tabla = $_GET['t'];
    $datos = new $clase(); 
    $result=[];
    
    switch($_SERVER["REQUEST_METHOD"]) {
        case "GET":
            $result = $datos->getDataEntrada($tabla);
            break;
    }
    
    header("Content-Type: application/json");
    echo json_encode($result);
    }

    if($tipo ==5){
      $id = $_POST['id'];
      $o1 = $_POST['nombre'];
      $o2 = $_POST['comentario'];
    
      $entrada  = new EntradaData();
    
      $entrada->id = $id;  
      $entrada->o1 = $o1;  
      $entrada->o2 = $o2;   
      $entrada->addComentario();

      echo "1"; 
    }

    if($tipo ==6){
      $clase =$_GET['c'];
      $tabla = $_GET['t'];
      $datos = new $clase(); 
      $result=[];
      
      switch($_SERVER["REQUEST_METHOD"]) {
          case "GET":
              $result = $datos->getDataComentarios($tabla);
              break;
      }
      
      header("Content-Type: application/json");
      echo json_encode($result);
      }
  
      if($tipo ==7){
        $id = $_POST['id'];   
        $entrada  = new EntradaData();      
        $entrada->id = $id;  
        $entrada->del();
        echo "1"; 
      }

      if($tipo ==8){
        $id = $_POST['id'];   
        $entrada  = new EntradaData();      
        $entrada->id = $id;  
        $entrada->delComentario();
        echo "1"; 
      }
      if($tipo ==9){
        $clase =$_GET['c'];
        $tabla = $_GET['t'];
        $datos = new $clase(); 
        $result=[];
        
        switch($_SERVER["REQUEST_METHOD"]) {
            case "GET":
                $result = $datos->getDataMensaje($tabla);
                break;
        }
        
        header("Content-Type: application/json");
        echo json_encode($result);
        }
?>
