<?php
$html = '';
$page = $_GET['page'];
$rowsPerPage = NUM_ITEMS_BY_PAGE;
$offset = ($page - 1) * $rowsPerPage;
sleep(1);
$articulosPagina = ArticuloData::getDataPaginas($offset,$rowsPerPage,'1');
  foreach($articulosPagina as $articulosPagina){
        $media = MediaData::getData('idArticulo',$articulosPagina->id);

        $html .='<div class="col-md-4">';
        $html .='<div class="product py-4"> <span class="off bg-primary">'.$articulosPagina->dato1.'</span>';
        $html .='<div class="text-center"> <img src="'.substr($media->image,1).'" width="200"> </div>';
        $html .='<div class="about text-center">';
        $html .='<h5>'.$articulosPagina->articulo.'</h5> <span>$/ '.$articulosPagina->costo.'</span>';
        $html .='</div>';
        $html .='<div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary"><i class="fa fa-plus"></i>  Rentar</button>';
        $html .='<div class="add">'; 
        $html .='<span class="product_fav">';
        $html .='<i class="fa fa-heart"></i>';
        $html .='</span>'; 
        $html .='<span class="product_fav">';
        $html .='<a href ="index.php?view=articulo&a='.$articulosPagina->codigo.'"><i class="fa fa-search"></i>';
        $html .='</span>'; 
        $html .='</div>';
        $html .='</div>';
        $html .='</div>';
        $html .='</div>';
  }
  echo $html;
?>
