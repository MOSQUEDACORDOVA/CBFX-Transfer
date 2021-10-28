<?php
class UserData {
	public static $tablename = "user";
	
	public function __construct(){
		$this->id = '0';
		$this->nombre = "";
		$this->nombreUsuario = "";	
		$this->password = "";
		$this->userLevel ="";
		$this->idReferido ="0";
		$this->confirmacion ="0";
		$this->created = "NOW()";
		$this->image ="no_image.jpg";
		$this->fechaNacimiento ="";
		$this->genero ="";
		$this->estatus ='0';
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,nombreUsuario,password,userLevel,idReferido,confirmacion,fechaNacimiento,genero,created,estatus) ";
		$sql .= "value (\"$this->nombre\",\"$this->nombreUsuario\",\"$this->password\",\"$this->userLevel\",$this->idReferido,
		$this->confirmacion,\"$this->fechaNacimiento\",$this->genero,$this->created,'1')";
		//echo $sql;
		Executor::doit($sql);
	}
	
	
	public  function radomPassword(){
		$alphabet = "0123456789ABCDEFGHIJKLMNOPQSTUWXYZabcdefghijqlmnopqrstuvwxyz";
		$pass = array(); //recuerde que debe declarar $pass como un array
		$alphaLength = strlen($alphabet) - 1; //poner la longitud -1 en caché
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //convertir el array en una cadena
	}				
	
	public static function foundMailNoticia($email,$password){
		$sql = "select count(id) as cuenta,id,nombre,nombreUsuario,userLevel,estatus,confirmacion from ".self::$tablename." where nombreUsuario='$email' and password ='$password' and estatus = 1";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}
	public static function foundId($email){
		$sql = "select count(id) as cuenta from ".self::$tablename." where nombreUsuario='$email'";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function foundMail($email){
		$sql = "select id from ".self::$tablename." where nombreUsuario='$email'";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	// partiendo de que ya tenemos creado un objecto StatusData previamente utilizamos el contexto
	public  function loginTime(){
		$date = strftime("%Y-%m-%d %H:%M:%S", time());
		$sql = "update ".self::$tablename." set ultimoLogin=\"$date\" where nombreUsuario='$this->nombreUsuario'";
		//echo $sql;	
		return $query=Executor::doit($sql);
		
	}

	public static function login($email,$password){
		$sql = "select count(id) as cuenta,nombre,nombreUsuario,userLevel,estatus from ".self::$tablename." where nombreUsuario='$email' and password ='$password' and estatus = 1";
		echo $sql;
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['cuenta'];
			$data->nombre = $r['nombre'];
			$data->nombreUsuario = $r['nombreUsuario'];			
			$data->userLevel = $r['userLevel'];
			$data->estatus = $r['estatus'];
			$found = $data;
			break;
		}
		return $found;
	}
	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",telefono=\"$this->telefono\",direccion=\"$this->direccion\"  where nombreUsuario='$this->nombreUsuario'";
		Executor::doit($sql);
	}
	
	public function updatePassword(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where nombreUsuario='$this->nombreUsuario'";
		//echo $sql;
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new UserData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->nombre = $r['nombre'];
			$data->nombreUsuario = $r['nombreUsuario'];
			$data->userLevel = $r['userLevel'];
			$data->estatus = $r['estatus'];
			$found = $data;
			break;
		}
		return $found;
	}

	
}
?>