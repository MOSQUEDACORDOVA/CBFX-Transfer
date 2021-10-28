<?php


  $entradasPagina = EntradaData::getDataPaginasEntrada($_POST);
  $html =$entradasPagina;
if($html==""){
  $html="Ho hay resultados para mostrar";
}
	$data = array(
		"html"	=> $html,	
	);
	echo json_encode($data);	


?>
