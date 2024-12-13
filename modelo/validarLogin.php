<?php
require_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : null;
    $contraseña = isset($_POST['contraseña']) ? trim($_POST['contraseña']) : null;

    if (!$correo || !$contraseña) {
        echo "Error: Todos los campos son obligatorios.";
        exit;
    }

    try {
        $conexion = new Conexion();
        $query = "SELECT * FROM Cliente WHERE Correo = :correo";
        $stmt = $conexion->prepare($query);
        $stmt->execute([':correo' => $correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($contraseña, $usuario['Contraseña'])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['usuario'] = $usuario;
            header('Location: ../index.php');
            exit;
        } else {
            echo "Error: Correo o contraseña incorrectos.";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error de PDO: " . $e->getMessage();
        exit;
    }
}
?>