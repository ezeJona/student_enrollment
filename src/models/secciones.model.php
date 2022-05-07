<?php
    include "conexion.model.php";
    class SeccionModel{
        private $db;

        public function __construct($conexion) {
            $this->db = $conexion;
        }

        public function obtenerInformacionSeccionesPorGrado($grado_id) {
            $stmt = $this->db->prepare("CALL obtener_informacion_secciones_por_grado(?)");
            $stmt->bind_param("i", $grado_id);
            $stmt->execute();

            $resultado = $stmt->get_result();
            $datos = [];

            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }

            $stmt->close();
            return $datos;
        }
    }
