<?php
    include "conexion.model.php";

    class DocenteModel{
            private $conexion;
            private $db; // Guardamos el objeto Conexion

        public function __construct()
        {
            $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
            $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
        }

        //Metodo para agregar nuevos docentes
        public function eliminarDocente($docente_id) {
            try {
                $stmt = $this->conexion->prepare("CALL sp_eliminar_docente(?)");
                $stmt->bind_param("i", $docente_id);
                $stmt->execute();
                return true;
            } catch (mysqli_sql_exception $e) {
                return $e->getMessage();
            }
        }
    }