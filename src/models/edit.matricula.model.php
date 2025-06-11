<?php
include "conexion.model.php";

class MatriculaModel {
    private $conexion;
    private $db;

    public function __construct()
    {
        $this->db = new Conexion(); // Guardamos el objeto para evitar destrucción
        $this->conexion = $this->db->getConexion();
    }

    public function editarInfoMatricula($matricula_id, $estado_matricula, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $grado_id, $email, $codigo_estudiantil)
    {
        $stmt = $this->conexion->prepare("CALL sp_editar_info_matricula(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssiss", 
            $matricula_id,
            $estado_matricula,
            $primer_nombre,
            $segundo_nombre,
            $primer_apellido,
            $segundo_apellido,
            $grado_id,
            $email,
            $codigo_estudiantil
        );
        return $stmt->execute();
    }

    public function obtenerMatriculaPorId($matricula_id)
    {
        $stmt = $this->conexion->prepare("SELECT * FROM matricula WHERE matricula_id = ?");
        $stmt->bind_param("i", $matricula_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
