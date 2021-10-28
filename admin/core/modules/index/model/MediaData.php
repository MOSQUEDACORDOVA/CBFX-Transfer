<?php
class MediaData {
	public static $tablename = "archivo";

	public function __construct(){
		$this->id = "";
		$this->idGuia = "";
		$this->tipo = "1";	
		$this->archivo = "";	
	}
	
	public function addFoto(){
		$sql = "insert into ".self::$tablename." (idGuia,tipo,archivo,estatus) ";
		$sql .= "value ($this->idGuia,'1',\"$this->archivo\",'1')";
		//echo $sql;
	Executor::doit($sql);
	}
	
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
		unlink('../admin/storage/articulos/'.$this->archivo);
	}

	public static function delByIdL($id){
		$sql = "update ".self::$tablename." set estatus=0 where id=$id";
		Executor::doit($sql);
	}
	
	public function delL(){
		$sql = "update ".self::$tablename." set estatus=0 where id=$this->id";
		Executor::doit($sql);
	}

	public function update_image(){
		$sql = "update ".self::$tablename." set image='$this->image' where id=$this->id";
		Executor::doit($sql);
	}



	public static function getData($key,$id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE ".$key." =$id LIMIT 0,1";
		//echo $sql;
		$query = Executor::doit($sql);
		$found = null;
		$data = new MediaData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];		
			$data->archivo = $r['archivo'];			
			$found = $data;
			break;
		}
		return $found;
	}

	

	public static function getAllDatos($id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE idGuia =$id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new MediaData();
            $array[$cnt]->id = $r['id'];
			$archivo= $r['archivo'];	
			$o4 =  substr($archivo, 3); 
			$array[$cnt]->archivo = $o4;		
			$cnt++;
		}
		return $array;
	}

	public static function getAllFotos(){
		$sql = "SELECT * FROM ".self::$tablename." LIMIT 0,6";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new MediaData();
            $array[$cnt]->id = $r['id'];
			$archivo= $r['archivo'];	
			$o4 =  substr($archivo, 3); 
			$array[$cnt]->archivo = $o4;		
			$cnt++;
		}
		return $array;
	}
	

	public static function getDataFotos($key,$id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE ".$key." =$id";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new MediaData();
            $array[$cnt]->id = $r['id'];
			$array[$cnt]->archivo = $r['archivo'];		
			
			$cnt++;
		}
		return $array;
	}

	// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set ingrediente=\"$this->ingrediente\",image=\"$this->image\"		
		 where id=$this->id";
		Executor::doit($sql);
	}


	


}

?>