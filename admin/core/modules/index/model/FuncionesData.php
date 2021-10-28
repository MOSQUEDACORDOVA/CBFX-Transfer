<?php
class FuncionesData {
	public static $tablename = "users";
	
	public function __construct(){
		$this->id = '0';
		$this->cuenta = "";
	}

	public static function foundId($tabla,$key,$valor){
	
		$sql = "SELECT COUNT(c.".$key.") cuenta FROM ".$tabla." c WHERE c.".$key."=".$valor."";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new ArticuloData());
	}
	
	

	
}
?>