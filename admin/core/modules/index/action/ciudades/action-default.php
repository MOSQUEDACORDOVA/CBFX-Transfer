<?php

$pais =$_GET['pais'];
$ciudades = new CiudadData(); 
$ciudadesArreglo = $ciudades->getAllDatos($pais);
if(count($ciudadesArreglo)>0){
    print "<option value=''> Seleccione capital </option>";
foreach($ciudadesArreglo as $ciudad){

    print "<option value='$ciudad->id'>$ciudad->ciudad</option>";
}
}else{
    print "<option value=''> Seleccione capital </option>";
}

?>
