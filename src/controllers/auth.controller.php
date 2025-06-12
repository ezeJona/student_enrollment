<?php
session_start();
require_once '../models/usuarios.model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    try {
        $usuarioModel = new Usuario();
        $resultado = $usuarioModel->autenticar($username, $contrasena);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            $_SESSION['usuario_id'] = $usuario['usuario_id'];
            $_SESSION['usuario_nombre'] = $usuario['username'];
            $_SESSION['usuario_rol'] = $usuario['rol_id'];

            echo json_encode([
                'status' => 'ok',
                'rol' => $usuario['rol_id']
            ]);
        } else {
            echo 'Usuario o contraseña incorrectos';
        }
    } catch (Exception $e) {
        echo 'Error en el servidor: ' . $e->getMessage();
    }
} else {
    echo 'Acceso no permitido';
}
