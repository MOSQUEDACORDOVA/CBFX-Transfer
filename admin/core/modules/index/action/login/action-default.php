<?php
$nombreUsuario = $_POST['email'];
$password = sha1(md5($_POST['password']));
$user = new UserData(); 
$t = $user->foundMailNoticia($nombreUsuario,$password);
$id = $t->cuenta;	
$userlevel=$t->userLevel;
$confirmacion=$t->confirmacion;
//echo $id;
if($id==1){   
  if($userlevel==1){
  $_SESSION['logged_in'] = true; 
	$_SESSION['estado'] = $t->estatus;
  $_SESSION['nombre'] = $t->nombre;
  $_SESSION['nombreUsuario'] = $t->nombreUsuario;
  $_SESSION['nivel'] = $t->userLevel;
  $user->nombreUsuario =$t->nombreUsuario;
  $user->loginTime();
  echo "1";
    }
if($userlevel==2){
  if($confirmacion==1){
  $_SESSION['logged_in'] = true; 
	$_SESSION['estado'] = $t->estatus;
  $_SESSION['nombre'] = $t->nombre;
  $_SESSION['nombreUsuario'] = $t->nombreUsuario;
  $_SESSION['nivel'] = $t->userLevel;
  $user->nombreUsuario =$t->nombreUsuario;
  $user->loginTime();
  echo "2";
  }else{
    echo "3";
  }
}
}else{
  echo "0";
}
?>
