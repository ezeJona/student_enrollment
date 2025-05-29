<?php
include "../models/docente.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $estudiante = new DocenteModel();

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
        'sexo'              => $_POST['sexo'],
        'departamento'      => $_POST['departamento'],
        'municipio'         => $_POST['municipio']
    ];

    $resultado = $estudiante->agregarDocente($datos);

    if ($resultado) {
        header("Location: ../views/dashboard_student.php?success=1");
    } else {
        header("Location: ../views/dashboard_studentphp?error=1");
    }
    exit;
}
?>
