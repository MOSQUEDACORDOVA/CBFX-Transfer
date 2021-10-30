<?php
class SeccionData {
	public static $tablename = "cambio";																			

	public function __construct(){
		$this->id = '0';
		$this->pais = '0';
		$this->codigo = '0';
		$this->monto = '0';
		$this->estatus = '0';
		
	}

	
	/*
Textos completos	
id
idSeccionTab
titulo
texto
estatus*/
public function addEnlace(){
	$sql = "insert into enlace (caption,enlace,estatus) ";
	$sql .= "value (\"$this->caption\",\"$this->enlace\",1)";
	//echo $sql;
	Executor::doit($sql);	
}

public function add(){
	$sql = "insert into ".self::$tablename." (titulo,cantidad,estatus) ";
	$sql .= "value (\"$this->titulo\",1,1)";
	//echo $sql;
	Executor::doit($sql);	
}


public function addTema(){
	$sql = "insert into seccion (idSeccionTab,titulo,texto,estatus) ";
	$sql .= "value ($this->idSeccionTab,\"$this->titulo\",\"$this->texto\",1)";
	//echo $sql;
	Executor::doit($sql);	
}

public function update(){
	$sql = "update seccion set texto ='".$this->textSeccion."'  where id=$this->id";
	//echo $sql;
	Executor::doit($sql);
}


public function updateEnlaces(){
	$sql = "update enlace set caption ='".$this->caption."',enlace ='".$this->enlace."'  where id=$this->id";
	//echo $sql;
	Executor::doit($sql);
}


public function delTema(){
	$sql = "DELETE FROM seccion WHERE id  = $this->id";
	//echo $sql;
	Executor::doit($sql);
}
public function delSeccion(){
	$sql = "DELETE FROM ".self::$tablename." WHERE id  = $this->id";
	//echo $sql;
	Executor::doit($sql);
}

public function delBoton(){
	$sql = "DELETE FROM enlace WHERE id  = $this->id";
	//echo $sql;
	Executor::doit($sql);
}

public static function getByIdEnlace($id){
	$sql = "SELECT  * FROM enlace WHERE id=$id";
	$query = Executor::doit($sql);
	$found = null;
	$data = new SeccionData();
	while($r = $query[0]->fetch_array()){
		$data->id = $r['id'];
		$data->caption = $r['caption'];
		$data->enlace = $r['enlace'];	
		$data->estatus = $r['estatus'];			
		$found = $data;
		break;
	}
	return $found;
}


	public static function foundMailNoticia($email,$password){
		$sql = "select count(id) as cuenta,nombre,nombreUsuario,userLevel,estatus,confirmacion from ".self::$tablename." where nombreUsuario='$email' and password ='$password' and estatus = 1";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public  function cuenta($id){
		$sql = "select count(id) as cuenta from ".self::$tablename." where pais='$id'";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}





	
public static function getAll($estatus){
	$sql = "select *  from ".self::$tablename;	
	//echo $sql;
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
	while($r = $query[0]->fetch_array()){
		$array[$cnt] = new SeccionData();    
		$array[$cnt]->id = $r['id'];
		$array[$cnt]->pais = $r['pais'];
		$array[$cnt]->codigo = $r['codigo'];
		$array[$cnt]->monto = $r['monto'];
		$array[$cnt]->estatus = $r['estatus'];
	$cnt++;
	}
	return $array;
}	
}
?>