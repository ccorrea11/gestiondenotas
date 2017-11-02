<?php
 
require_once 'profesor_modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $profesores = new profesores();
		$profesores->editar($datos);
        break;
    case 'nuevo':
        $profesores = new profesores();
		$profesores->nuevo($datos);
        break;
    case 'borrar':
		$profesores = new profesores();
		$profesores->borrar($datos['prof_id']);
        break;
}
?>
