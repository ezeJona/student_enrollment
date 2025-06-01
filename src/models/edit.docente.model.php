<?php
include "conexion.model.php";

class DocenteModel {
     private $conexion;
            private $db; // Guardamos el objeto Conexion

        public function __construct()
        {
            $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
            $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
        }

    public function editarDocente($docente_id, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cedula, $telefono, $turno, $estado) {
        $stmt = $this->conexion->prepare("CALL sp_editar_docente(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issssssss", 
            $docente_id, 
            $primer_nombre, 
            $segundo_nombre, 
            $primer_apellido, 
            $segundo_apellido, 
            $cedula, 
            $telefono, 
            $turno, 
            $estado
        );
        return $stmt->execute();
    }

    public function obtenerDocentePorId($docente_id) {
        $stmt = $this->conexion->prepare("SELECT * FROM docente WHERE docente_id = ?");
        $stmt->bind_param("i", $docente_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
}
