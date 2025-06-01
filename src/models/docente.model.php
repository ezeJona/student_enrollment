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

        //Metodo para mostrar todos los estudiantes
        public function read(){
            $stmt = $this->conexion->prepare("SELECT * FROM vista_info_docente");
            $stmt->execute();
            return $stmt->get_result(); // Devuelve todos los datos
        }

        //Metodo para agregar nuevos docentes
        public function agregarDocente($data) {
        try {
            $stmt = $this->conexion->prepare("CALL sp_agregar_docente(?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param(
                "sssssss",
                $data['primer_nombre'],
                $data['segundo_nombre'],
                $data['primer_apellido'],
                $data['segundo_apellido'],
                $data['cedula'],
                $data['telefono'],
                $data['turno']
            );

            $stmt->execute();
            return true;

        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }

    /*public function eliminarDocente($docente_id) {
        try {
            $stmt = $this->conexion->prepare("CALL sp_eliminar_docente(?)");
            $stmt->bind_param("i", $docente_id);
            $stmt->execute();
            return true;
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }*/
}