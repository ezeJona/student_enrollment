<?php
include "conexion.model.php";

class EstudianteModel {
    private $conexion;
    private $db; // Guardamos el objeto Conexion

    public function __construct()
    {
        $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
        $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
    }

    public function editarEstudiante($estudiante_id, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $codigo_estudiantil, $telefono, $estado_matricula) {
        $stmt = $this->conexion->prepare("CALL sp_editar_info_estudiante(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssss", 
            $estudiante_id, 
            $primer_nombre, 
            $segundo_nombre, 
            $primer_apellido, 
            $segundo_apellido, 
            $codigo_estudiantil, 
            $telefono, 
            $estado_matricula
        );
        return $stmt->execute();
    }

    public function obtenerEstudiantePorId($estudiante_id) {
        $stmt = $this->conexion->prepare("SELECT * FROM estudiante WHERE estudiante_id = ?");
        $stmt->bind_param("i", $estudiante_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
