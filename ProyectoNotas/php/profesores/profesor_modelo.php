<?php
    require_once("../modeloAbstractoDB.php");
	
	
    class profesores extends ModeloAbstractoDB {
		public $profesor_id;
		
		//public $usu_id;
		public $profesor_nom;
		public $profesor_ape;
		public $profesor_sexo;
		public $profesor_cor;
		public $institucion_id;
		
		function __construct() {
			$this->name= "profesores";
		}
		 
		public function consultar($profesor_id='') {
			if($profesor_id !=''):
				$this->query = "
				SELECT profesor_id, profesor_nom, profesor_ape, ins.institucion_nom, profesor_sexo, profesor_cor, asig.asignatura_nombre
				FROM tb_profesor as pro inner join tb_institucion as ins on (pro.institucion_id=ins.institucion_id)
				inner join tb_asignatura as asig on (pro.asignatura_id=asig.asignatura_id)
				WHERE profesor_id = '$profesor_id' order by profesor_id
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
			$this->query = "SELECT profesor_id, profesor_nom, profesor_ape, ins.institucion_nom,profesor_sexo, profesor_cor, asig.asignatura_nombre FROM tb_profesor as pro inner join tb_asignatura as asig on (pro.asignatura_id = asig.asignatura_id) INNER JOIN tb_institucion as ins on (pro.institucion_id=ins.institucion_id)";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function listaprofesores() {
			$this->query = "
			SELECT profesor_id, CONCAT(profesor_nom, ' ', profesor_ape) as nombre
			FROM tb_profesor
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_profesor
					(profesor_id, profesor_nom, profesor_ape, institucion_id, profesor_sexo,  profesor_cor, asignatura_id) 
					VALUES 
					(NULL,'$profesor_nom', '$profesor_ape', '$institucion_id' , '$profesor_sexo', '$profesor_cor', '$asignatura_id')";
				$this->ejecutar_query_simple();
		}
	
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_profesor
			SET profesor_nom='$profesor_nom',
			profesor_ape='$profesor_ape',
			profesor_cor = '$profesor_cor',
			profesor_sexo= '$profesor_sexo',
			institucion_id= '$institucion_id',
			asignatura_id= '$asignatura_id'
			WHERE profesor_id = '$profesor_id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($profesor_id='') {
			$this->query = "
			DELETE FROM tb_profesor
			WHERE profesor_id = '$profesor_id'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			unset($this->name);
		}
	}
?>