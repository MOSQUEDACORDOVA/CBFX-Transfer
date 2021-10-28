<?php
class CanadaData {
	public static $tablename = "canada";																			

	public function __construct(){
		$this->id = '1';		$this->c1 = ' ';		$this->c2 = ' ';
		$this->c3 = ' ';		$this->c4 = ' ';		$this->c5 = ' ';
		$this->c6 = ' ';		$this->c7 = ' ';		$this->c8 = ' ';
		$this->c9 = ' ';		$this->c10 = ' ';		$this->c11 = ' ';
		$this->c12 = ' ';		$this->c13 = ' ';		$this->c14 = ' ';
		$this->c15 = ' ';		$this->c16 = ' ';		$this->c17 = ' ';
		$this->c18 = ' ';		$this->c19 = ' ';		$this->c20 = ' ';
		$this->c21 = ' ';		$this->c22= ' ';		$this->c23 = ' ';
		$this->c24 = ' ';		$this->c25 = ' ';		$this->c26 = ' ';
		$this->c27 = ' ';		$this->c28 = ' ';
		$this->estatus="";
		$this->campo = '';
	

	}
	public function updateData($campo){
		$sql = "update ".self::$tablename." set ".$campo."=\"$this->campo\"  where id=$this->id";
		//echo $sql;
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set 
		c1=\"$this->c1\" ,c2=\"$this->c2\" ,c3=\"$this->c3\" ,c4=\"$this->c4\" ,c5=\"$this->c5\" ,c6=\"$this->c6\" 
		,c7=\"$this->c7\" ,c8=\"$this->c8\" ,c9=\"$this->c9\",c10=\"$this->c10\",c11=\"$this->c11\",c12=\"$this->c12\"
		,c13=\"$this->c13\",c14=\"$this->c14\",c15=\"$this->c15\",c16=\"$this->c16\",c17=\"$this->c17\",c18=\"$this->c18\"
		,c19=\"$this->c19\",c20=\"$this->c20\" ,c21=\"$this->c21\",c22=\"$this->c22\",c23=\"$this->c23\",c24=\"$this->c24\"
		,c25=\"$this->c25\",c26=\"$this->c26\",c27=\"$this->c27\",c28=\"$this->c28\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getData(){
		$sql = " SELECT *  FROM  ".self::$tablename ." LIMIT 1";
		//echo $sql;
		$query = Executor::doit($sql);
		$found = null;
		$data = new CanadaData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->c1 = $r['c1']; $data->c10 = $r['c10'];  $data->c19 = $r['c19']; $data->c28 = $r['c28'];
			$data->c2 = $r['c2']; $data->c11 = $r['c11']; $data->c20 = $r['c20']; $data->c29 = $r['c29'];
			$data->c3 = $r['c3']; $data->c12 = $r['c12']; $data->c21 = $r['c21']; $data->c30 = $r['c30'];
			$data->c4 = $r['c4']; $data->c13 = $r['c13']; $data->c22 = $r['c22'];
			$data->c5 = $r['c5']; $data->c14 = $r['c14']; $data->c23 = $r['c23'];
			$data->c6 = $r['c6']; $data->c15 = $r['c15']; $data->c24 = $r['c24'];
			$data->c7 = $r['c7']; $data->c16 = $r['c16']; $data->c25 = $r['c25'];
			$data->c8 = $r['c8']; $data->c17 = $r['c17']; $data->c26 = $r['c26'];
			$data->c9 = $r['c9']; $data->c18 = $r['c18']; $data->c27 = $r['c27'];
			
			
			$data->estatus = $r['estatus'];		

			$found = $data;
			break;
		}
		return $found;
	}


public static function getAllDatos($tabla){
	$sql = "SELECT *  FROM ".self::$tablename;	
	//echo $sql;
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
	while($r = $query[0]->fetch_array()){
		$array[$cnt] = new CanadaData();    
			$array[$cnt]->id = $r['id'];		
			$array[$cnt]->c1 = $r['c1']; $array[$cnt]->c10 = $r['c10'];  $array[$cnt]->c19 = $r['c19']; $array[$cnt]->c28 = $r['c28'];
			$array[$cnt]->c2 = $r['c2']; $array[$cnt]->c11 = $r['c11']; $array[$cnt]->c20 = $r['c20']; $array[$cnt]->c29 = $r['c29'];
			$array[$cnt]->c3 = $r['c3']; $array[$cnt]->c12 = $r['c12']; $array[$cnt]->c21 = $r['c21']; $array[$cnt]->c30 = $r['c30'];
			$array[$cnt]->c4 = $r['c4']; $array[$cnt]->c13 = $r['c13']; $array[$cnt]->c22 = $r['c22'];
			$array[$cnt]->c5 = $r['c5']; $array[$cnt]->c14 = $r['c14']; $array[$cnt]->c23 = $r['c23'];
			$array[$cnt]->c6 = $r['c6']; $array[$cnt]->c15 = $r['c15']; $array[$cnt]->c24 = $r['c24'];
			$array[$cnt]->c7 = $r['c7']; $array[$cnt]->c16 = $r['c16']; $array[$cnt]->c25 = $r['c25'];
			$array[$cnt]->c8 = $r['c8']; $array[$cnt]->c17 = $r['c17']; $array[$cnt]->c26 = $r['c26'];
			$array[$cnt]->c9 = $r['c9']; $array[$cnt]->c18 = $r['c18']; $array[$cnt]->c27 = $r['c27'];
	$cnt++;
	}
	return $array;
}


}
?>