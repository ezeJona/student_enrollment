<?php

// Parámetros de conexión
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'sistema_de_matricula');

class Conexion
{
    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if ($this->mysqli->connect_error) {
            throw new Exception("Error de conexión: " . $this->mysqli->connect_error);
        }

        $this->mysqli->set_charset('utf8mb4');
    }

    // Retorna la instancia de conexión mysqli
    public function getConexion()
    {
        return $this->mysqli;
    }

    public function __destruct()
    {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }
}
