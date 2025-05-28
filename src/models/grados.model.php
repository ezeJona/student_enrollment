<?php
    include "conexion.model.php";

    class GradoModel{
            private $conexion;
            private $db; // Guardamos el objeto Conexion

        public function __construct()
        {
            $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
            $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
        }

        public function read(){
            $stmt = $this->conexion->prepare("SELECT * FROM grado");
            $stmt->execute();
            return $stmt->get_result(); // Devuelve todos los datos
        }

        public function readGradosConSecciones(){
        $stmt = $this->conexion->prepare("
            SELECT 
                g.grado_id AS id_grado,
                g.nombre AS nombre_grado,
                s.nombre AS nombre_seccion,
                s.turno,
                COUNT(m.matricula_id) AS estudiantes_totales,
                CONCAT(d.primer_nombre, ' ', d.primer_apellido) AS docente_guia,
                s.cupos_disponibles AS cupos_maximos,
                s.cupos_disponibles - COUNT(m.matricula_id) AS cupos_disponibles
            FROM seccion s
            LEFT JOIN grado g ON s.grado_id = g.grado_id
            LEFT JOIN matricula m ON g.grado_id = m.grado_id
            LEFT JOIN docente d ON s.docente_id = d.docente_id
            GROUP BY g.grado_id, g.nombre, s.seccion_id, s.nombre, s.turno, s.cupos_disponibles, d.docente_id
            ORDER BY g.grado_id, s.nombre;
        ");
        
        $stmt->execute();
        return $stmt->get_result();
    }

        public function readSeccion(){
            $stmt = $this->conexion->prepare("SELECT * FROM vista_informacion_secciones");
            $stmt->execute();
            return $stmt->get_result(); // Devuelve todos los datos
        }

    }