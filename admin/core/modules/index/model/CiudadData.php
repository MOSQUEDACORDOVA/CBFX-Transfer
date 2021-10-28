<?php
class CiudadData {
	public static $tablename = "ciudad";
	
	public function __construct(){
		$this->id = '0';
		$this->ciudad = "";
		$this->ciudadData = "";
	}



	public static function getAllDatos($codigo){	

		$sql = "SELECT * FROM ".self::$tablename." WHERE pais ='".$codigo."' ORDER BY ciudad ASC;";
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new CiudadData();
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->ciudad = $r['ciudad'];			
			$cnt++;		
		}
		return $array;
	}

	public static function getById($id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE id='$id'";
		$query = Executor::doit($sql);
		$found = null;
		$data = new CiudadData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->ciudad = $r['ciudad'];			
			$found = $data;
			break;
		}
		return $found;
	}

	
}
?>