<?php
    require_once("../modeloAbstractoDB.php");
	
	
    class institucion extends ModeloAbstractoDB {
		public $institucion_id;
		
		//public $usu_id;
		public $institucion_nom;
		public $institucion_dir;
		
		
		function __construct() {
			$this->name= "institucion";
		}
		 
		public function consultar($institucion_id='') {
			if($institucion_id !=''):
				$this->query = "
				SELECT institucion_id, institucion_nom, institucion_dir
				FROM tb_institucion
				WHERE institucion_id = '$institucion_id' order by institucion_id
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT institucion_id, institucion_nom, institucion_dir, ciu.ciudad_nom
			FROM tb_institucion  as ins inner join tb_ciudad as ciu on (ins.ciudad_id = ciu.ciudad_id)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function listaInstitucion() {
			$this->query = "
			SELECT institucion_id, institucion_nom, institucion_dir
			FROM tb_institucion";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_institucion
					(institucion_id, institucion_nom, institucion_dir, ciudad_id) 
					VALUES 
					(NULL,'$institucion_nom', '$institucion_dir', '$ciudad_id')";
				$this->ejecutar_query_simple();
		}
	
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_institucion
			SET institucion_nom='$institucion_nom',
			institucion_dir='$institucion_dir',
			ciudad_id='$ciudad_id'
			WHERE institucion_id = '$institucion_id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($institucion_id='') {
			$this->query = "
			DELETE FROM tb_institucion
			WHERE institucion_id = '$institucion_id'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			unset($this->name);
		}
	}
?>