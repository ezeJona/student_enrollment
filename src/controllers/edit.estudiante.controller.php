<?php
require_once '../models/edit.estudiante.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $estudianteModel = new EstudianteModel();

    $resultado = $estudianteModel->editarEstudiante(
        $_POST['estudiante_id'],
        $_POST['primer_nombre'],
        $_POST['segundo_nombre'],
        $_POST['primer_apellido'],
        $_POST['segundo_apellido'],
        $_POST['codigo_estudiantil'],
        $_POST['fecha_nacimiento'],
        $_POST['sexo'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['correo'],
        $_POST['municipio'],
        $_POST['departamento'],
        $_POST['username'],
        $_POST['password'],
        $_POST['resp_primer_nombre'],
        $_POST['resp_segundo_nombre'],
        $_POST['resp_primer_apellido'],
        $_POST['resp_segundo_apellido'],
        $_POST['resp_direccion'],
        $_POST['resp_cedula'],
        $_POST['resp_telefono'],
        $_POST['grado_id'],
        $_POST['anio_escolar'],
        $_POST['turno']
    );

    if ($resultado) {
        echo 'ok';
    } else {
        echo 'Error al editar el estudiante.';
    }
}
