<?php
    require_once("../modeloAbstractoDB.php");
	
	
    class asignatura extends ModeloAbstractoDB {
		public $asignatura_id;
		
		//public $usu_id;
		public $asignatura_nombre;
		public $asignatura_desc;
		
		
		function __construct() {
			$this->name= "asignatura";
		}
		 
		public function consultar($asignatura_id='') {
			if($asignatura_id !=''):
				$this->query = "
				SELECT asignatura_id, asignatura_nombre, asignatura_desc
				FROM tb_asignatura
				WHERE asignatura_id = '$asignatura_id' order by asignatura_id
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
			SELECT asignatura_id, asignatura_nombre, asignatura_desc
			FROM tb_asignatura
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function listaAsignatura() {
			$this->query = "
			SELECT asignatura_id, asignatura_nombre, asignatura_desc
			FROM tb_asignatura ";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_asignatura
					(asignatura_id, asignatura_nombre, asignatura_desc) 
					VALUES 
					(NULL,'$asignatura_nombre', '$asignatura_desc')";
				$this->ejecutar_query_simple();
		}
	
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_asignatura
			SET asignatura_nombre='$asignatura_nombre',
			asignatura_desc='$asignatura_desc'
			WHERE asignatura_id = '$asignatura_id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($asignatura_id='') {
			$this->query = "
			DELETE FROM tb_asignatura
			WHERE asignatura_id = '$asignatura_id'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			unset($this->name);
		}
	}
?>