<?php
class MediaDataBlog {
	public static $tablename = "archivoBlog";

	public function __construct(){
		$this->id = "";
		$this->idEntrada = "";
		$this->tipo = "";	
		$this->archivo = "";	
		$this->estatus = "1";	
	}
	
	/*public function add(){
		$sql = "insert into ".self::$tablename." (idEntrada,tipo,archivo,estatus) ";
		$sql .= "value ($this->idEntrada,1,\"$this->archivo\",'1')";
		//echo $sql;
	Executor::doit($sql);
	}
*/
	public function add($imagen){
		$sql = "insert into ".self::$tablename." (idEntrada,tipo,archivo,estatus) ";
		$sql .= "value ($this->idEntrada,'1',\"$imagen\",'1')";
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
		$sql = "SELECT * FROM ".self::$tablename." WHERE ".$key." =$id";
		//echo $sql;
		$query = Executor::doit($sql);
		$found = null;
		$data = new MediaDataBlog();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];		
			$data->archivo = $r['archivo'];			
			$found = $data;
			break;
		}
		return $found;
	}

	

	public static function getAll(){
		$sql = "select * from ".self::$tablename. " where estatus=1";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new IngredienteData();
            $array[$cnt]->id = $r['id'];
			$array[$cnt]->nombre = $r['nombre'];			
			$array[$cnt]->image = $r['image'];			
			$array[$cnt]->is_active = $r['estatus'];		
			$cnt++;
		}
		return $array;
	}

	
	public static function getAllDatos($id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE idEntrada =$id";
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

	// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set ingrediente=\"$this->ingrediente\",image=\"$this->image\"		
		 where id=$this->id";
		Executor::doit($sql);
	}


	


}

?>