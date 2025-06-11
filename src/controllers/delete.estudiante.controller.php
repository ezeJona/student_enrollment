<?php

require_once '../models/delete.estudiante.model.php';

if (isset($_POST['estudiante_id'])) {
    $estudianteId = $_POST['estudiante_id'];

    $estudianteModel = new EstudianteModel();
    $resultado = $estudianteModel->eliminarEstudiante($estudianteId);

    if ($resultado === true) {
        echo 'ok';
    } else {
        echo "Error al eliminar: $resultado";
    }
} else {
    echo "ID no recibido.";
}
