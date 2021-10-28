<?php
class AgendaData {
	public static $tablename = "agenda";																			

	public function __construct(){
		$this->id = '0';
		$this->continente = "";	
		$this->pais = "";	
		$this->capital = "";
		$this->moneda = "";	
		$this->idioma = "";	
		$this->clima = "";
		$this->llegar ='';
	
		$this->hospedaje = "";	
		
		$this->actividad ='0';
	
		$this->presupuesto ='';		
		$this->transporte ='';		
	
		$this->comida ="";
	
		$this->consejo="";

		$this->lat ="";
		$this->lon ="";
	
		$this->o1="";
		$this->o2="";
		$this->o3="";
		$this->o4="";
		$this->estatus="";
	

	}

	public function add(){
		$sql = "insert into ".self::$tablename." (pais,capital,moneda,idioma,estatus,clima,llegar,hospedaje,actividad,presupuesto,transporte,comida,consejo,lat,lon,continente) ";
		$sql .= "value (\"$this->pais\",\"$this->capital\",\"$this->moneda\",\"$this->idioma\",\"$this->estatus\",\"$this->clima\",\"$this->llegar\",\"$this->hospedaje\",\"$this->actividad\",\"$this->presupuesto\",\"$this->transporte\",\"$this->comida\",\"$this->consejo\",\"$this->lat\",\"$this->lon\",\"$this->continente\")";
		//echo $sql;
		Executor::doit($sql);	
	}
	public function update(){
		$sql = "update ".self::$tablename." set pais=\"$this->pais\",capital=\"$this->capital\",moneda=\"$this->moneda\" ,idioma=\"$this->idioma\",estatus=\"$this->estatus\",clima=\"$this->clima\",llegar=\"$this->llegar\",hospedaje=\"$this->hospedaje\",actividad=\"$this->actividad\",presupuesto=\"$this->presupuesto\",transporte=\"$this->transporte\",comida=\"$this->comida\",consejo=\"$this->consejo\"  where id=$this->id";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "DELETE FROM ".self::$tablename." WHERE id  = $this->id";
		//echo $sql;
		Executor::doit($sql);
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


	public static function foundId($codigo){
		$sql = "select id from ".self::$tablename." where codigo='$codigo'";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new ArticuloData());
	}
	

	
public static function getAll($estatus){
	$sql = "select *  from ".self::$tablename;	
	//echo $sql;
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
	while($r = $query[0]->fetch_array()){
		$array[$cnt] = new AgendaData();    
		$array[$cnt]->id = $r['id'];
		$array[$cnt]->pais = $r['pais'];
		$array[$cnt]->capital = $r['capital'];
		$array[$cnt]->moneda = $r['moneda'];
		$array[$cnt]->lat = $r['lat'];
		$array[$cnt]->lon = $r['lon'];
		$array[$cnt]->estatus = $r['estatus'];
	$cnt++;
	}
	return $array;
}

public static function getFiltro($c){
	$sql = "SELECT a.id,a.pais,a.capital,a.moneda,a.lat,a.lon,a.estatus,p.Pais as npais  FROM ".self::$tablename." a  INNER JOIN paises p ON p.Codigo = a.pais WHERE a.continente = '".$c."'";	
	//echo $sql;
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
	while($r = $query[0]->fetch_array()){
		$media = MediaData::getData('idGuia',$r['id']);
		$array[$cnt] = new AgendaData();    
		$array[$cnt]->id = $r['id'];
		$array[$cnt]->pais = $r['npais'];
		$array[$cnt]->capital = $r['capital'];
		$array[$cnt]->moneda = $r['moneda'];
		$array[$cnt]->lat = $r['lat'];
		$array[$cnt]->lon = $r['lon'];
		$archivo=  $media->archivo;
		$o4 =  substr($archivo, 3); 
		$array[$cnt]->o4 = $o4 ;
		$array[$cnt]->estatus = $r['estatus'];
	$cnt++;
	}
	return $array;
}
	public static function getAllDatos($tabla){
		$sql = "SELECT DISTINCT (a.pais) AS pais, p.Pais,a.lat,a.lon FROM agenda a INNER JOIN paises p ON p.Codigo = a.pais";
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		$sql ="";
		while($r = $query[0]->fetch_array()){
			$sq2 ="";
				$sql2 = "select count(id) as cuenta from ".self::$tablename." where pais='".$r['pais']."'";
				//echo $sql;	
				$query2 = Executor::doit($sql2);
				$cuenta = Model::one($query2[0],new UserData());
			$array[$cnt] = new AgendaData();    
			//$array[$cnt]->id = $r['id'];
			$array[$cnt]->pais =strtolower($r['pais']);		
			$array[$cnt]->o1 = $r['Pais'];	
			$array[$cnt]->lat = $r['lat'];
			$array[$cnt]->lon = $r['lon'];	
			$array[$cnt]->o2 = $cuenta->cuenta;	
		$cnt++;
		}
		return $array;
	}

	public static function getDataAgenda($dato){
		$sql = "SELECT a.*,p.Codigo,p.Pais as npais,c.ciudad,m.CurrencyName  FROM ".self::$tablename." a  
		INNER JOIN paises p 
		ON p.Codigo = a.pais 
		INNER JOIN ciudad c 
		ON c.id = a.capital
		INNER JOIN currency m 
		ON m.CurrencyISO = a.moneda WHERE a.id = $dato";	
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AgendaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->pais = $r['npais'];
			$array[$cnt]->o1 = $r['npais'];	
			$array[$cnt]->capital = $r['capital'];
			$array[$cnt]->o2 = $r['ciudad'];
			$array[$cnt]->moneda = $r['moneda'];
			$array[$cnt]->o3 = $r['CurrencyName'];
			$array[$cnt]->idioma = $r['idioma'];
			$array[$cnt]->clima = $r['clima'];
			$array[$cnt]->llegar = $r['llegar'];
			$array[$cnt]->hospedaje = $r['hospedaje'];
			$array[$cnt]->actividad = $r['actividad'];
			$array[$cnt]->presupuesto = $r['presupuesto'];
			$array[$cnt]->transporte = $r['transporte'];
			$array[$cnt]->comida = $r['comida'];
			$array[$cnt]->consejo = $r['consejo'];
			$array[$cnt]->estatus = $r['estatus'];		
		$cnt++;
		}
		return $array;
	}
	

	

	

	public static function getData($codigo){
		$sql = "SELECT
		a.*,
		p.Codigo,
		p.Pais,
		c.ciudad,
		m.CurrencyName
	FROM ".self::$tablename." a
	INNER JOIN paises p ON
		p.Codigo = a.pais
	INNER JOIN ciudad c ON
		c.id = a.capital
	INNER JOIN currency m ON
		m.CurrencyISO = a.moneda
	WHERE
		a.id = $codigo
	ORDER BY a.id ASC 
		LIMIT 1";
		//echo $sql;
		$query = Executor::doit($sql);
		$found = null;
		$data = new AgendaData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->pais = $r['Pais'];
			$data->o1 = $r['Codigo'];			
			$data->capital = $r['capital'];
			$data->o2 = $r['ciudad'];
			$data->moneda = $r['moneda'];
			$data->o3 = $r['CurrencyName'];
			$data->idioma = $r['idioma'];
			$data->clima = $r['clima'];
			$data->llegar = $r['llegar'];
			$data->hospedaje = $r['hospedaje'];
			$data->actividad = $r['actividad'];
			$data->presupuesto = $r['presupuesto'];
			$data->transporte = $r['transporte'];
			$data->comida = $r['comida'];
			$data->consejo = $r['consejo'];
			$data->estatus = $r['estatus'];		

			$found = $data;
			break;
		}
		return $found;
	}

}
?>