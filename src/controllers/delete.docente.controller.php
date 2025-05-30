<?php

require_once '../models/delete.docente.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar_docente'])) {
    $data = [
    'primer_nombre' => $_POST['primer_nombre'],
    'segundo_nombre' => $_POST['segundo_nombre'],
    'primer_apellido' => $_POST['primer_apellido'],
    'segundo_apellido' => $_POST['segundo_apellido'],
    'cedula' => $_POST['cedula'],
    'telefono' => $_POST['telefono'],
    'turno' => $_POST['turno']
];

    $docenteModel = new DocenteModel();
    $resultado = $docenteModel->agregarDocente($data);

    if ($resultado === true) {
        echo 'ok';
    } else {
        echo "Error al registrar docente";
    }
}

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