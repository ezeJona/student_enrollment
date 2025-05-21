<?php
    include "conexion.model.php";

    class EstudentModel{
            private $conexion;
            private $db; // Guardamos el objeto Conexion

        public function __construct()
        {
            $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
            $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
        }

        public function read(){
            $stmt = $this->conexion->prepare("SELECT * FROM vista_matricula_estudiantes");
            $stmt->execute();
            return $stmt->get_result(); // Devuelve todos los datos
        }

    }