<?php
session_start();

// Verificar si las variables de sesión existen
if (!isset($_SESSION['usuario_id']) || !isset($_SESSION['usuario_nombre'])) {
    // Redirigir al login si no está autenticado
    header("Location: ./login.php");
    exit();
}
