<?php
    require_once("../modeloAbstractoDB.php");
	
	
    class profesores extends ModeloAbstractoDB {
		public $prof_id;
		public $inst_id;
		public $usu_id;
		public $nomb_prof;
		public $apel_prof;
		public $sexo_prof;
		public $correo_prof;
		
		function __construct() {
			$this->name= "profesores";
		}
		 
		public function consultar($prof_id='') {
			if($prof_id !=''):
				$this->query = "
				SELECT prof_id, nomb_prof, apel_prof, inst_id, sexo_prof,  correo_prof
				FROM profesores
				WHERE prof_id = '$prof_id' order by prof_id
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
			SELECT prof_id, nomb_prof, apel_prof, inst_id, sexo_prof,  correo_prof
			FROM profesores
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function listaprofesores() {
			$this->query = "
			SELECT prof_id, CONCAT(nomb_prof, ' ', apel_prof) as nombre
			FROM profesores
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO profesores 
					(prof_id, nomb_prof, apel_prof, inst_id, sexo_prof,  correo_prof) 
					VALUES 
					(NULL,'$nomb_prof', '$apel_prof', '$inst_id' , '$sexo_prof', '$correo_prof')";
				$this->ejecutar_query_simple();
		}
	
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE profesores
			SET nomb_prof='$nomb_prof',
			apel_prof='$apel_prof',
			correo_prof = '$correo_prof'
			WHERE prof_id = '$prof_id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($prof_id='') {
			$this->query = "
			DELETE FROM profesores
			WHERE prof_id = '$prof_id'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			unset($this->name);
		}
	}
?>