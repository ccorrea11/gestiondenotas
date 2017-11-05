<?php
    require_once("../modeloAbstractoDB.php");
	
    class Asignatura extends ModeloAbstractoDB {
		public $asig_id;
		public $nomb_asig;
		public $desc_asig;
		
		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($asig_id='') {
			if($asig_id !=''):
				$this->query = "
				SELECT *
				FROM asignaturas
				WHERE asig_id = '$asig_id' order by nomb_asig
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}

		public function consultarContratos($perso_codi='') {
			if($perso_codi !=''):
				$this->query = "
				SELECT *, e.nombre, t.tipo_descripcion AS tipo_contrato
				FROM tb_contratos AS c
				INNER JOIN tb_empresas AS e ON (e.nit = c.nit_empresa)
				INNER JOIN tb_tipo_contrato AS t ON (t.tipo_id = c.tipo_contrato)
				WHERE perso_codi = '$perso_codi' 
				ORDER BY no_contrato
				";
				$this->obtener_resultados_query();
			endif;
			return $this->rows;
		}
		
		public function lista() {
			/*$this->query = "
			SELECT comu_codi, comu_nomb, m.muni_nomb
			FROM tb_comuna as c inner join tb_municipio as m
			ON (c.muni_codi = m.muni_codi) order by comu_codi
			";*/
			$this->query = "
			SELECT asig_id, nomb_asig, desc_asig
			FROM asignaturas
			ORDER BY nomb_asig
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('nomb_asig', $datos)):
				$this->consultar($datos['nomb_asig']);
				if($datos['nomb_asig'] != $this->nomb_asig):
					foreach ($datos as $campo=>$valor):
						$$campo = $valor;
					endforeach;
					$this->query = "
					INSERT INTO asignaturas
					(nomb_asig, desc_asig)
					VALUES
					('$nomb_asig', '$desc_asig')
					";
					$this->ejecutar_query_simple();
				endif;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE asignaturas
			SET nomb_asig='$nomb_asig',
			desc_asig='$desc_asig'
			WHERE asig_id = '$asig_id'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($asig_id='') {
			$this->query = "
			DELETE FROM asignaturas
			WHERE asig_id = '$asig_id'
			";
			$this->ejecutar_query_simple();
		}
		
		/*function __destruct() {
			unset($this);
		}*/
	}
?>