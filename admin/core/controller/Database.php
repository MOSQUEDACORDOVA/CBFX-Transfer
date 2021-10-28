<?php
class Database {
	public static $db;
	public static $con;
	public function __construct(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="cambio";
	//$this->user="mosqueda_blog";$this->pass="[Kkj1GH&)9+D";$this->host="localhost";$this->ddbb="mosqueda_blog";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->set_charset("utf8");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
