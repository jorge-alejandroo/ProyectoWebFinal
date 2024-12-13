<?php
require_once('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : null;
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : null;
    $contraseña = isset($_POST['contraseña']) ? trim($_POST['contraseña']) : null;
    $confirmar_contraseña = isset($_POST['confirmar_contraseña']) ? trim($_POST['confirmar_contraseña']) : null;

    if (!$nombre || !$apellido || !$correo || !$contraseña || !$confirmar_contraseña) {
        echo "Error: Todos los campos son obligatorios.<br>";
        var_dump($_POST); // Mostrar datos recibidos
        exit;
    }

    if ($contraseña !== $confirmar_contraseña) {
        echo "Error: Las contraseñas no coinciden.<br>";
        exit;
    }

    if (strlen($contraseña) > 6) {
        echo "Error: La contraseña no debe exceder los 6 caracteres.<br>";
        exit;
    }

    $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

    try {
        $conexion = new Conexion();
        $query = "INSERT INTO Cliente (Nombre, Apellido, Correo, Contraseña) 
                  VALUES (:nombre, :apellido, :correo, :password)";
        $stmt = $conexion->prepare($query);

        $parametros = [
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':password' => $contraseña_encriptada,
        ];

        echo "Consulta preparada: $query<br>";
        echo "Parámetros: <pre>";
        print_r($parametros);
        echo "</pre>";

        $stmt->execute($parametros);

        echo "Registro exitoso. Redirigiendo...";
        header("refresh:2;url=../index.php");
    } catch (PDOException $e) {
        echo "Error de PDO: " . $e->getMessage() . "<br>";
        echo "Consulta: $query<br>";
        echo "Parámetros utilizados: <pre>";
        print_r($parametros);
        echo "</pre>";
        exit;
    }
}
?>