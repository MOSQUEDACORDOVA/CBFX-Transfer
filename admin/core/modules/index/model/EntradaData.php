<?php
class EntradaData {
	public static $tablename = "entrada";																			

	public function __construct(){
		$this->id = '0';
		$this->codigo = "";	
		$this->idTipo = "";	
		$this->titulo = "";
		$this->entradaBlog = "";
		$this->fecha = "";	
		$this->destacado = "";	
		$this->slider = "";
		$this->mensaje = "";
	
		$this->o1="";
		$this->o2="";
		$this->o3="";
		$this->o4="";
		$this->estatus="";
		
	}

	public  function radomMensaje(){
		$alphabet = "123456789";
		$pass = array(); //recuerde que debe declarar $pass como un array
		$alphaLength = strlen($alphabet) - 1; //poner la longitud -1 en caché
		for ($i = 0; $i < 1; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //convertir el array en una cadena
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (codigo,idTipo,titulo,entrada,fecha,destacado,slider,estatus) ";
		$sql .= "value (\"$this->codigo\",$this->idTipo,\"$this->titulo\",\"$this->entradaBlog\",\"$this->fecha\",$this->destacado,$this->slider,1)";
		//echo $sql;
		Executor::doit($sql);	
	}


	public function addComentario(){
		date_default_timezone_set('America/Lima');
		$hoy = date("Y-m-d H:i:s");	
		$sql = "insert into comentario (idEntrada,nombre,comentario,fecha,estatus) ";
		$sql .= "value ($this->id,\"$this->o1\",\"$this->o2\",'$hoy',1)";
		//echo $sql;
		Executor::doit($sql);	
	}


	public function update(){
		$sql = "update ".self::$tablename." set titulo=\"$this->titulo\",entrada=\"$this->entradaBlog\"  where id=$this->id";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "DELETE FROM ".self::$tablename." WHERE id  = $this->id";
		//echo $sql;
		Executor::doit($sql);
	}

	public function delComentario(){
		$sql = "DELETE FROM comentario WHERE id  = $this->id";
		//echo $sql;
		Executor::doit($sql);
	}

	public static function foundId($codigo){
		$sql = "select id from ".self::$tablename." where codigo='$codigo'";
		//echo $sql;	
		$query = Executor::doit($sql);
		return Model::one($query[0],new EntradaData());
	}
	
	public static function getAll($estatus){
		$sql = "select *  from ".self::$tablename;	
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->titulo = $r['titulo'];
			$array[$cnt]->fecha = $r['fecha'];		
			$array[$cnt]->estatus = $r['estatus'];
		$cnt++;
		}
		return $array;
	}

	public static function getComentarios($id){
		$sql = "SELECT *  FROM  comentario WHERE idEntrada=$id";	
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->o1 = $r['nombre'];
			$array[$cnt]->o2 = $r['comentario'];
			$array[$cnt]->fecha = $r['fecha'];	
			
		$cnt++;
		}
		return $array;
	}
	public  function getDataMensaje(){
		$id = $this->radomMensaje();
		$sql = "SELECT *  FROM  mensaje WHERE id=$id  AND estatus =1";	
		//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new EntradaData();   		
			$array[$cnt]->mensaje = $r['texto'];		
		$cnt++;
		}
		return $array;
	}
	


	public static function getDataComentarios($tabla){
		$sql = "select c.* from comentario c WHERE c.idEntrada = $tabla ORDER BY c.fecha ASC ";	
	//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->o1 = $r['nombre'];
			$array[$cnt]->o2 = $r['comentario'];
		$cnt++;
		}
		return $array;
	}

	public static function getDataEntrada($tabla){
		$sql = "select e.id,e.codigo,e.titulo,e.entrada,e.fecha,e.estatus from ".self::$tablename." e WHERE e.id = $tabla ORDER BY e.fecha ASC ";	
	//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//	$sql2 = "SELECT archivo FROM archivoBlog"

			$media = MediaDataBlog::getData('idEntrada',$r['id']);

			$archivo ="";
			$imagen ="";
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->titulo = $r['titulo'];
			$array[$cnt]->entradaBlog = $r['entrada'];
			$array[$cnt]->fecha = $r['fecha'];		
			$array[$cnt]->estatus = $r['estatus'];
			$archivo =  $media->archivo;
			$imagen = substr($archivo,1);
			$array[$cnt]->o1 = $imagen;
		$cnt++;
		}
		return $array;
	}

	public static function getAllDatos($tabla){
		$sql = "select e.id,e.codigo,e.titulo,e.fecha,e.estatus from ".self::$tablename.' e  ORDER BY fecha DESC LIMIT 0,3  ';	
	//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//	$sql2 = "SELECT archivo FROM archivoBlog"

			$media = MediaDataBlog::getData('idEntrada',$r['id']);

			$archivo ="";
			$imagen ="";
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->titulo = $r['titulo'];
			$array[$cnt]->fecha = $r['fecha'];		
			$array[$cnt]->estatus = $r['estatus'];
			$archivo =  $media->archivo;
			$imagen = substr($archivo,1);
			$array[$cnt]->o1 = $imagen;
		$cnt++;
		}
		return $array;
	}

	public static function getAllDatosTodas($tabla){
		$sql = "select e.id,e.codigo,e.titulo,e.fecha,e.entrada,e.estatus from ".self::$tablename.' e  ORDER BY e.fecha DESC';	
	//echo $sql;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			//	$sql2 = "SELECT archivo FROM archivoBlog"

			$media = MediaDataBlog::getData('idEntrada',$r['id']);
			$archivo ="";
			$imagen ="";
			$array[$cnt] = new EntradaData();    
			$array[$cnt]->id = $r['id'];
			$array[$cnt]->codigo = $r['codigo'];
			$array[$cnt]->titulo = $r['titulo'];
			$array[$cnt]->entradaBlog = $r['entrada'];
			$array[$cnt]->fecha = $r['fecha'];		
			$array[$cnt]->estatus = $r['estatus'];
			$archivo =  $media->archivo;
			$imagen = substr($archivo,1);
			$array[$cnt]->o1 = $imagen;
		$cnt++;
		}
		return $array;
	}

	public static function getById($id){
		$sql = "SELECT  * FROM ".self::$tablename." WHERE id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new EntradaData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->titulo = $r['titulo'];
			$data->entradaBlog = $r['entrada'];
			$data->fecha = $r['fecha'];
			$data->estatus = $r['estatus'];
			$found = $data;
			break;
		}
		return $found;
	}

	public static function getDataPaginasEntrada($entrada){

		$sql = "SELECT * FROM ".self::$tablename." e WHERE e.titulo LIKE '%".$_POST["entrada"]."%'";	
		//echo $sql;
	
		$query = Executor::doit($sql);
		
		$html = '';
		$cnt = 0;
	

		while($r = $query[0]->fetch_array()){
			$resultado ="Hace tiempo";
			$media = MediaDataBlog::getData('idEntrada',$r['id']);
			$archivo =  $media->archivo;
			$imagen = substr($archivo,1);
			//$media = MediaData::getData('idArticulo',$r['id']);			
			$html = '<div class="col-12 col-md-6 col-lg-4 item" >';
			$html.= '<div class="row card p-0 text-center">';
			$html.='<div class="image-over">';
			$html.='<img src="'.$imagen.'" alt="Lorem ipsum">';
			$html.='</div>';
			$html.='<div class="card-footer d-lg-flex align-items-center justify-content-center">';
			$html.='<a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Nati</a>';
			$html.='<a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>'.$resultado.'</a>';
			$html.='</div>';
			$html.='<div class="card-caption col-12 p-0">';
			$html.='<div class="card-body">';
			$html.='<a href="index.php?view=entrada&e='.$r['id'].'">';
			$html.='<h4>'.$r['titulo'].'</h4>';
			$html.='<p>'.$r['fecha'].'</p>';
			$html.='</a>';
			$html.='</div>';
			$html.='</div>';
			$html.='</div>';
			$html.='</div>';
		$cnt++;
		}

	
		return $html;
	}

	

}
?>