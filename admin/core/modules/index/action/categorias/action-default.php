<?php
$t =0;
$t = $_GET['t'];
if($t==1){
$categoria = $_POST['categoria'];
$comentario = $_POST['comentario'];
$categorias = new CategoriaData(); 
    $categorias->categoria =  ucwords($categoria);
    $categorias->comentario = $comentario;   
    $categorias->add();
    echo "1";  
}else{
  /*
  if($t==2){
    $cart_box ="";
  $categorias = new CategoriaData(); 
  $arreglo = $categorias->getAll('1');
  foreach($arreglo as $categoria){
    $cart_box .="<tr>";
    $cart_box .="<td>";
    $cart_box .=$categoria->id;    
    $cart_box .="</td>";
    $cart_box .="<td>";
    $cart_box .=$categoria->categoria;    
    $cart_box .="</td>";
    $cart_box .="<td>";
    $cart_box .=$categoria->comentario;    
    $cart_box .="</td>";
    $cart_box .="<td>";
    $cart_box .=$categoria->estatus;    
    $cart_box .="</td>";
    $cart_box .="<td>";
    $cart_box .="<a>editar / eliminar</a>";    
    $cart_box .="</td>";
    $cart_box .="<tr>";
  }
  echo $cart_box;
  }
  */
}
?>
