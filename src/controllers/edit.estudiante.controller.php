<?php
require_once '../models/edit.estudiante.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear instancia del modelo
    $estudianteModel = new EstudianteModel();

    // Ejecutar el método del modelo
    $resultado = $estudianteModel->editarEstudiante(
        $_POST['estudiante_id'],
        $_POST['primer_nombre'],
        $_POST['segundo_nombre'],
        $_POST['primer_apellido'],
        $_POST['segundo_apellido'],
        $_POST['codigo_estudiantil'],
        $_POST['telefono'],
        $_POST['estado_matricula']
    );

    // Enviar respuesta
    if ($resultado) {
        echo 'ok';
    } else {
        echo 'Error al editar el estudiante.';
    }
}
