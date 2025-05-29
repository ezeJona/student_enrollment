<?php

require_once '../models/matricula.registro.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'primer_nombre' => $_POST['primer_nombre'],
        'segundo_nombre' => $_POST['segundo_nombre'],
        'primer_apellido' => $_POST['primer_apellido'],
        'segundo_apellido' => $_POST['segundo_apellido'],
        'codigo_estudiantil' => $_POST['codigo_estudiantil'],
        'fecha_nacimiento' => $_POST['fecha_nacimiento'],
        'direccion' => $_POST['direccion'],
        'telefono' => $_POST['telefono'],
        'correo' => $_POST['correo'],
        'municipio' => $_POST['municipio'],
        'departamento' => $_POST['departamento'],
        'sexo' => $_POST['sexo'],
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),

        'responsable_primer_nombre' => $_POST['responsable_primer_nombre'],
        'responsable_segundo_nombre' => $_POST['responsable_segundo_nombre'],
        'responsable_primer_apellido' => $_POST['responsable_primer_apellido'],
        'responsable_segundo_apellido' => $_POST['responsable_segundo_apellido'],
        'responsable_direccion' => $_POST['responsable_direccion'],
        'responsable_cedula' => $_POST['responsable_cedula'],
        'responsable_telefono' => $_POST['responsable_telefono'],

        'grado_id' => intval($_POST['grado_id']),
        'año_escolar' => $_POST['año_escolar'],
        'turno' => $_POST['turno']
    ];

    $modelo = new EstudianteModel();
    $matricula_id = $modelo->matricularEstudiante($data);

    if ($matricula_id) {
        echo "Matrícula registrada con éxito. ID: " . $matricula_id;
    } else {
        echo "Error al registrar la matrícula.";
    }
}