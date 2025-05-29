
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
    
    public function agregarEstudiante($datos)
{
    $query = "INSERT INTO estudiante (
        primer_nombre, segundo_nombre, primer_apellido, segundo_apellido,
        codigo_estudiantil, fecha_nacimiento, direccion, telefono, correo,
        turno, estado, municipio, departamento, sexo
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $this->conexion->prepare($query);

    if (!$stmt) return false;

    $stmt->bind_param(
        "ssssssssssssss",
        $datos['primerNombre'],
        $datos['segundoNombre'],
        $datos['primerApellido'],
        $datos['segundoApellido'],
        $datos['codigoEstudiante'],
        $datos['fechaNacimiento'],
        $datos['direccion'],
        $datos['telefono'],
        $datos['email'],
        $datos['turno'],
        $datos['estado'],
        $datos['municipio'],
        $datos['departamento'],
        $datos['sexo']
    );

    return $stmt->execute();
}
}

