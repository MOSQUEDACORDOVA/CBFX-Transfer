<?php
class MonedaData {
	public static $tablename = "currency";


	public function __construct(){
		$this->CurrencyISO = '0';
		$this->Language = "";
		$this->CurrencyName = "";
		$this->Money = "";
	}



	public static function getAll(){
		$sql = "SELECT *  FROM ".self::$tablename." ORDER BY CurrencyName ASC";	
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new MonedaData();    
			$array[$cnt]->CurrencyISO = $r['CurrencyISO'];
			$array[$cnt]->CurrencyName = $r['CurrencyName'];		
		$cnt++;
		}
		return $array;
	}

	public static function getById($id){
		$sql = "SELECT * FROM ".self::$tablename." WHERE CurrencyISO='$id'";
		$query = Executor::doit($sql);
		$found = null;
		$data = new CiudadData();
		while($r = $query[0]->fetch_array()){
			$data->CurrencyISO = $r['CurrencyISO'];
			$data->CurrencyName = $r['CurrencyName'];			
			$found = $data;
			break;
		}
		return $found;
	}

	
}
?>