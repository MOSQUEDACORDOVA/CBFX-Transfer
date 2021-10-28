<?php
if(isset($_GET['tipo'])){
$tipo =$_GET['tipo'];
}
if(isset($_POST['tipo'])){
  $tipo =$_POST['tipo'];
  }
if($tipo ==1){
  $continente = $_POST['continente'];
  $pais = $_POST['pais'];
  $capital = $_POST['capital'];
  $moneda = $_POST['moneda'];
  $idioma = $_POST['idioma'];
  $estatus = $_POST['estatus'];
  
  $clima = $_POST['clima'];
  $llegar = $_POST['llegar'];
  $hospedaje = $_POST['hospedaje'];
  $actividad = $_POST['actividad'];
  $presupuesto = $_POST['presupuesto'];
  $transporte = $_POST['transporte'];
  $comida = $_POST['comida'];
  $consejo = $_POST['consejo'];

  $lat = $_POST['latitud'];
  $lon = $_POST['longitud'];
  
  $agenda  = new AgendaData(); 
      $agenda->continente = $continente;  
      $agenda->pais = $pais;  
      $agenda->capital = $capital; 
      $agenda->moneda = $moneda; 
      $agenda->idioma = $idioma;
      $agenda->estatus = $estatus;  
      $agenda->clima = $clima;  
      $agenda->llegar = $llegar; 
      $agenda->hospedaje = $hospedaje; 
      $agenda->actividad = $actividad; 
      $agenda->presupuesto = $presupuesto; 
      $agenda->transporte = $transporte;
      $agenda->comida = $comida;  
      $agenda->consejo = $consejo; 
      $agenda->lat = $lat;  
      $agenda->lon = $lon; 
      $agenda->add();
  echo "1"; 

}
if($tipo ==2){
  $id = $_POST['id'];
  $pais = $_POST['pais'];
  $capital = $_POST['capital'];
  $moneda = $_POST['moneda'];
  $idioma = $_POST['idioma'];
  $estatus = $_POST['estatus'];
  
  $clima = $_POST['clima'];
  $llegar = $_POST['llegar'];
  $hospedaje = $_POST['hospedaje'];
  $actividad = $_POST['actividad'];
  $presupuesto = $_POST['presupuesto'];
  $transporte = $_POST['transporte'];
  $comida = $_POST['comida'];
  $consejo = $_POST['consejo'];
  $agenda  = new AgendaData(); 

  $agenda->id = $id;  
  $agenda->pais = $pais;  
  $agenda->capital = $capital; 
  $agenda->moneda = $moneda; 
  $agenda->idioma = $idioma;
  $agenda->estatus = $estatus;  
  $agenda->clima = $clima;  
  $agenda->llegar = $llegar; 
  $agenda->hospedaje = $hospedaje; 
  $agenda->actividad = $actividad; 
  $agenda->presupuesto = $presupuesto; 
  $agenda->transporte = $transporte;
  $agenda->comida = $comida;  
  $agenda->consejo = $consejo; 
  $agenda->update();
  echo "1"; 
}
if($tipo ==3){
$clase =$_GET['c'];
$tabla = $_GET['t'];
$datos = new $clase(); 
$result=[];

switch($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        $result = $datos->getDataAgenda($tabla);
        break;
}

header("Content-Type: application/json");
echo json_encode($result);
}
?>
