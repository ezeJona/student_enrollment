<?php
require_once '../models/edit.matricula.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear instancia del modelo
    $matriculaModel = new MatriculaModel();

    // Ejecutar el método del modelo
    $resultado = $matriculaModel->editarInfoMatricula(
        $_POST['matricula_id'],
        $_POST['estado_matricula'],
        $_POST['primer_nombre'],
        $_POST['segundo_nombre'],
        $_POST['primer_apellido'],
        $_POST['segundo_apellido'],
        $_POST['grado_id'],
        $_POST['email'],
        $_POST['codigo_estudiantil']
    );

    // Enviar respuesta
    if ($resultado) {
        echo 'ok';
    } else {
        echo 'Error al editar la información de la matrícula.';
    }
}
