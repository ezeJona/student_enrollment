<?php

require_once '../models/delete.matricula.model.php';

if (isset($_POST['matricula_id'])) {
    $matriculaId = $_POST['matricula_id'];

    $matriculaModel = new MatriculaModel();
    $resultado = $matriculaModel->eliminarMatricula($matriculaId);

    if ($resultado === true) {
        echo 'ok';
    } else {
        echo "Error al eliminar: $resultado";
    }
} else {
    echo "ID no recibido.";
}
?>