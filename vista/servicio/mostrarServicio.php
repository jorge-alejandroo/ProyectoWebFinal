<?php
$mostrarPaquetes = false;
require_once('vista/layout/header.php');

// Estilo dinámico para el banner
$bannerStyle = "height: 200px; width: 100%; bottom: 38px; left: 10%; position: fixed; z-index: -100;";
$sidebarStyle = "position: fixed; top: 200px; left: 0.50px; height: calc(91.29% - 200px);"; // Ajusta la altura aquí
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodevista.jpg');
            background-size: 90%; /* Ajusta el tamaño aquí, puede ser en % o px */
            background-attachment: fixed;
            background-position: calc(50% - -100px) calc(200% - 100px); /* Mueve el fondo a la izquierda y arriba */
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            overflow-x: hidden; /* Evita el desplazamiento horizontal */
        }

        /* Contenedor para la barra lateral con fondo */
        .sidebar-container {
            width: 300px;
            position: sticky; /* Hace que la barra sea pegajosa */
            top: 150px; /* Ajusta la posición vertical */
            left: 10px; /* Ajusta la posición horizontal */
            height: calc(100% - 200px); /* Altura ajustable, puedes cambiar "200px" */
            background: #fff; /* Fondo blanco completamente opaco */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            z-index: 10;
            overflow-y: auto; /* Permite desplazamiento si el contenido excede */
        }

        /* Botones de la barra lateral */
        .sidebar .icon-button {
            display: flex;
            align-items: center;
            padding: 15px;
            margin: 15px 0;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: left;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            text-decoration: none;
            color: #333;
            font-size: 1.2em;
        }

        .sidebar .icon-button img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }

        .sidebar .icon-button:hover {x
            background: #e0e0e0;
            transform: translateY(-3px);
        }

        /* Contenido principal */
        .main-content {
            flex: 1;
            margin-left: 350px; /* Ajuste por el ancho de la barra lateral */
            padding: 30px;
        }

        /* Banner inferior dinámico */
        .bottom-banner {
            background-image: url('vista/imagenes/jpg/banerdeabajo.jpg');
            background-size: 100% 100%; /* Escalar tanto ancho como alto */
            background-repeat: no-repeat;
            position: fixed;
            transition: all 0.3s ease-in-out;
        }

        /* Elimina cualquier borde o margen residual */
        html, body {
            border: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Barra lateral con fondo -->
        <div class="sidebar-container" style="<?= $sidebarStyle; ?>">
            <div class="sidebar">
                <!-- Enlace a paquetes -->
                <a href="index.php?i=paquetes" class="icon-button">
                    <img src="vista/imagenes/png/paquetes.png" alt="Paquetes"> 
                    <span>Paquetes</span>
                </a>
                <!-- Enlace a hoteles -->
                <a href="index.php?i=hoteles" class="icon-button">
                    <img src="vista/imagenes/png/hoteles.png" alt="Hoteles">
                    <span>Hoteles</span>
                </a>
                <!-- Enlace a vuelos -->
                <a href="index.php?i=vuelos" class="icon-button">
                    <img src="vista/imagenes/png/vuelos.png" alt="Vuelos">
                    <span>Vuelos</span>
                </a>
                <!-- Enlace a actividades -->
                <a href="index.php?i=actividades" class="icon-button">
                    <img src="vista/imagenes/png/actividades.png" alt="Actividades">
                    <span>Actividades</span>
                </a>
                <!-- Enlace a transporte -->
                <a href="index.php?i=transporte" class="icon-button">
                    <img src="vista/imagenes/png/trasporte.png" alt="Transporte">
                    <span>Transporte</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Banner inferior -->
    <div class="bottom-banner" style="<?= $bannerStyle; ?>"></div>
</body>
</html>

<?php 
require_once('vista/layout/footer.php');
?>
