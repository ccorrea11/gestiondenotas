<?php
 
    require_once 'asignaturas_modelo.php';

    $datos = $_POST;

    switch ($_POST['accion']){
        case 'editar':
            $asignaturas = new Asignatura();
            $asignaturas->editar($datos);
        break;
        case 'nuevo':
            $asignaturas = new Asignatura();
            $asignaturas->nuevo($datos);
        break;
        case 'borrar':
            $asignaturas = new Asignatura();
            $asignaturas->borrar($datos['codigo']);
        break;
    }

?>
