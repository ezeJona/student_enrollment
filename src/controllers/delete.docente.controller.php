<?php

require_once '../models/delete.docente.model.php';

if (isset($_POST['docente_id'])) {
    $docenteId = $_POST['docente_id'];

    $objetoDocente = new DocenteModel();
    $resultado = $objetoDocente->eliminarDocente($docenteId);

    if ($resultado) {
        echo 'ok';
    } else {
        echo "Error al eliminar";
    }
} else {
    echo "ID no recibido.";
}