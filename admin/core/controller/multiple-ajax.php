<?php
if (isset($_FILES["file"]))
{
   $reporte = null;
     for($x=0; $x<count($_FILES["file"]["name"]); $x++)
    {
    $file = $_FILES["file"];
    $nombre = $file["name"][$x];
    $tipo = $file["type"][$x];
    $ruta_provisional = $file["tmp_name"][$x];
    $size = $file["size"][$x];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../adjunto/documento/";
    
    if ($tipo != 'image/jpeg' && $tipo != 'image/jpg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
        $reporte .= "<p style='color: red'>Error $nombre, el archivo no es una imagen.</p>";
    }
    else if($size > 2048*2048)
    {
        $reporte .= "<p style='color: red'>Error $nombre, el tamaño máximo permitido es 1mb</p>";
    }
    
    else if($width < 60 || $height < 60)
    {
        $reporte .= "<p style='color: red'>Error $nombre, la anchura y la altura mínima permitida es de 60px</p>";
    }
    else
    {
        $y=$x;
        $s=$y+1;
        $src = $carpeta.$nombre;
        $codigoProyectoOriginal = $_POST["iddocumento"];
        $codigoProyecto =$_POST["iddocumento"]."-".$s;
       // echo "<p style='color: blue'>$codigoProyecto</p>";
        move_uploaded_file($ruta_provisional, $src);
        $nuevonombre=$carpeta.'A-'.$codigoProyecto.".jpg";
        rename ($src,$nuevonombre);

       echo "<p style='color: blue'>La imagen $nombre ha sido subida con éxito</p>";
       echo "<center><input type='hidden' id='ruta' name='ruta' value='$nuevonombre' required='yes'></center>";
      
     
    }


    }
        echo $reporte;
}

