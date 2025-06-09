<?php
include "conexion.model.php";

class EstudianteModel {
    private $conexion;
    private $db;

    public function __construct()
    {
        $this->db = new Conexion();
        $this->conexion = $this->db->getConexion();
    }

    public function editarEstudiante(
        $estudiante_id,
        $primer_nombre,
        $segundo_nombre,
        $primer_apellido,
        $segundo_apellido,
        $codigo_estudiantil,
        $fecha_nacimiento,
        $sexo,
        $direccion,
        $telefono,
        $correo,
        $municipio,
        $departamento,
        $username,
        $password,
        $resp_primer_nombre,
        $resp_segundo_nombre,
        $resp_primer_apellido,
        $resp_segundo_apellido,
        $resp_direccion,
        $resp_cedula,
        $resp_telefono,
        $grado_id,
        $anio_escolar,
        $turno
    ) {
        $stmt = $this->conexion->prepare("CALL sp_editar_estudiante(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param(
            "isssssssssssssssssssssiss",
            $estudiante_id,
            $primer_nombre,
            $segundo_nombre,
            $primer_apellido,
            $segundo_apellido,
            $codigo_estudiantil,
            $fecha_nacimiento,
            $sexo,
            $direccion,
            $telefono,
            $correo,
            $municipio,
            $departamento,
            $username,
            $password,
            $resp_primer_nombre,
            $resp_segundo_nombre,
            $resp_primer_apellido,
            $resp_segundo_apellido,
            $resp_direccion,
            $resp_cedula,
            $resp_telefono,
            $grado_id,
            $anio_escolar,
            $turno
        );

        return $stmt->execute();
    }
}
