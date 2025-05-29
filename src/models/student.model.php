
<?php

    include "conexion.model.php";

class EstudentModel {
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
    
    

    

}

