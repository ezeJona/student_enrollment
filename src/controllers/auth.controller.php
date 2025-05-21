<?php
session_start();
require_once '../models/usuarios.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    try {
        $usuarioModel = new Usuario();
        $resultado = $usuarioModel->autenticar($correo, $contrasena);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            // Guardar datos en sesión
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_rol'] = $usuario['rol'];

            // Respuesta para AJAX
            echo 'ok';
        } else {
            echo 'Correo o contraseña incorrectos';
        }
    } catch (Exception $e) {
        echo 'Error en el servidor: ' . $e->getMessage();
    }
} else {
    echo 'Acceso no permitido';
}