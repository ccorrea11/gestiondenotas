<?php
 
require_once 'institucion_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $institucion1 = new institucion();
		$institucion1->editar($datos);
        break;
    case 'nuevo':
        $institucion1 = new institucion();
		$institucion1->nuevo($datos);
        break;
    case 'borrar':
		$institucion1 = new institucion();
		$institucion1->borrar($datos['codigo']);
        break;
}
?>
