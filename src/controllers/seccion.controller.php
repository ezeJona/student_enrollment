<?php
class SeccionController {
    private $modelo;

    public function __construct($conexion) {
        $this->modelo = new SeccionModel($conexion);
    }

    public function mostrarSeccionesPorGrado($grado_id) {
        $secciones = $this->modelo->obtenerInformacionSeccionesPorGrado($grado_id);
        include '../views/dashboard_grado.php'; // Carga la vista con los datos
    }
}
