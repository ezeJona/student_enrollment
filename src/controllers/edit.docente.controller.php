<?php

require_once '../models/edit.docente.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Crear una instancia del modelo
    $docenteModel = new DocenteModel();

    // Ejecutar el método del modelo
    $resultado = $docenteModel->editarDocente(
        $_POST['docente_id'],
        $_POST['primer_nombre'],
        $_POST['segundo_nombre'],
        $_POST['primer_apellido'],
        $_POST['segundo_apellido'],
        $_POST['cedula'],
        $_POST['telefono'],
        $_POST['turno'],
        $_POST['estado']
    );

    // Enviar respuesta
    if ($resultado) {
        echo 'ok';
    } else {
        echo 'Error al editar el docente.';
    }
}