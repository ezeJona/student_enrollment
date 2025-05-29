<?php
include "../models/student.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $estudiante = new EstudentModel();

    $datos = [
        'codigoEstudiante'  => $_POST['codigoEstudiante'],
        'primerNombre'      => $_POST['primerNombre'],
        'segundoNombre'     => $_POST['segundoNombre'] ?? null,
        'primerApellido'    => $_POST['primerApellido'],
        'segundoApellido'   => $_POST['segundoApellido'] ?? null,
        'telefono'          => $_POST['telefono'] ?? null,
        'email'             => $_POST['email'] ?? null,
        'fechaNacimiento'   => $_POST['fechaNacimiento'],
        'direccion'         => '',  // vacío
        'turno'             => '',  // vacío
        'estado'            => '',  // vacío
        'sexo'              => $_POST['sexo'],
        'departamento'      => $_POST['departamento'],
        'municipio'         => $_POST['municipio']
    ];

    $resultado = $estudiante->agregarEstudiante($datos);

    if ($resultado) {
        header("Location: ../views/dashboard_student.php?success=1");
    } else {
        header("Location: ../views/dashboard_studentphp?error=1");
    }
    exit;
}
?>
