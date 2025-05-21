<?php
require_once 'conexion.model.php';

class Usuario
{
    private $conexion;
    private $db; // Guardamos el objeto Conexion

    public function __construct()
    {
        $this->db = new Conexion(); // Guardamos el objeto para evitar que se destruya
        $this->conexion = $this->db->getConexion(); // Obtenemos la conexión mysqli
    }

    public function autenticar($correo, $contrasena)
    {
        $stmt = $this->conexion->prepare("SELECT * FROM usuario WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        return $stmt->get_result(); // No cierres la conexión aquí
    }
}