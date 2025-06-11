<?php
include "conexion.model.php";

class MatriculaModel {
    private $conexion;
    private $db; // Guardamos el objeto Conexion

    public function __construct()
    {
        $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
        $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
    }

    // Método para eliminar matrícula
    public function eliminarMatricula($matricula_id) {
        try {
            $stmt = $this->conexion->prepare("CALL sp_eliminar_matricula(?)");
            $stmt->bind_param("i", $matricula_id);
            $stmt->execute();
            return true;
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }
}
