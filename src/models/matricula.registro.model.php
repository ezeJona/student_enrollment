<?php

include "conexion.model.php";

class EstudianteModel {
    private $conexion;
    private $db;

    public function __construct() {
        $this->db = new Conexion();
        $this->conexion = $this->db->getConexion();
    }

    public function read(){
        $stmt = $this->conexion->prepare("SELECT * FROM vista_informacion_estudiantes");
        $stmt->execute();
        return $stmt->get_result(); // Devuelve todos los datos
    }

    public function matricularEstudiante($data)
    {
        $stmt = $this->conexion->prepare("CALL sp_matricular_nuevo_estudiante(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


        if (!$stmt) {
            die("Error en prepare: " . $this->conexion->error);
        }

        $stmt->bind_param("sssssssssssssssssssssiis", 
        $data['primer_nombre'],
        $data['segundo_nombre'],
        $data['primer_apellido'],
        $data['segundo_apellido'],
        $data['codigo_estudiantil'],
        $data['fecha_nacimiento'],
        $data['direccion'],
        $data['telefono'],
        $data['correo'],
        $data['municipio'],
        $data['departamento'],
        $data['sexo'],
        $data['username'],
        $data['password'],
        $data['responsable_primer_nombre'],
        $data['responsable_segundo_nombre'],
        $data['responsable_primer_apellido'],
        $data['responsable_segundo_apellido'],
        $data['responsable_direccion'],
        $data['responsable_cedula'],
        $data['responsable_telefono'],
        $data['grado_id'],
        $data['año_escolar'],
        $data['turno']
    );

        if (!$stmt->execute()) {
            die("Error al ejecutar: " . $stmt->error);
        }

        $result = $stmt->get_result();
        $matricula_id = null;
        if ($result) {
            $row = $result->fetch_assoc();
            $matricula_id = $row['matricula_id'] ?? null;
        }

        $stmt->close();
        return $matricula_id;
    }
}
