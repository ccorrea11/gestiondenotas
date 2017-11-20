<?php
 
require_once 'modelo_asignaturas.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $asignatura1 = new asignatura();
		$asignatura1->editar($datos);
        break;
    case 'nuevo':
        $asignatura1 = new asignatura();
		$asignatura1->nuevo($datos);
        break;
    case 'borrar':
		$asignatura1 = new asignatura();
		$asignatura1->borrar($datos['codigo']);
        break;
}
?>
