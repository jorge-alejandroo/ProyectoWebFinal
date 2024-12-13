<?php
$mostrarPaquetes = false;
require_once('vista/layout/header.php');
?>
<!DOCTYPE html>
<html lang="es">

 <!-- Botón de regreso a la página principal -->
 <a href="http://localhost/proyectoweb/index.php" class="back-btn">Regresar a la página principal</a>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos - Chiapas Tours</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Fondo de pantalla */
        body {
            background-image: url('vista/imagenes/jpg/perfiles1.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Contenedor principal para centrar perfiles */
        .profile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 1200px;
            margin: auto;
            position: relative;
            top: 0px; /* Ajusta el recuadro más abajo */
        }

        /* Tarjeta de perfil */
        .profile-card {
            background-color: #e0e0e0;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 250px;
            padding: 20px;
            text-align: center;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .profile-email,
        .profile-socials {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }

        .profile-socials a {
            color: #555;
            text-decoration: none;
            font-weight: bold;
        }

        .profile-socials a:hover {
            color: #0073e6;
        }

        /* Botón de regresar */
        .back-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background: #555;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            width: fit-content;
        }

        .back-btn:hover {
            background: #333;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <!-- Tarjetas de perfil para cada miembro -->
        <div class="profile-card">
            <img src="vista/imagenes/jpg/calvo.jpeg" alt="Carlos Enrique Calvo Gomez" class="profile-image">
            <div class="profile-name">Carlos Enrique Calvo Gomez</div>
            <div class="profile-email">carlos.calvo32@unach.mx</div>
            <div class="profile-socials">
                <a href="https://www.facebook.com/profile.php?id=100087899752577&mibextid=ZbWKwL" target="_blank">Facebook</a> |
                <a href="https://github.com/CarlosCalvo07" target="_blank">GitHub</a>
            </div>
        </div>

        <div class="profile-card">
            <img src="vista/imagenes/jpg/angel.jpeg" alt="Ángel González Tacías" class="profile-image">
            <div class="profile-name">Ángel González Tacías</div>
            <div class="profile-email">angel.gonzalez64@unach.mx</div>
            <div class="profile-socials">
                <a href="https://www.facebook.com/p/%C3%81ngel-gonzalez-100058786625706/?mibextid=ZbWKwL" target="_blank">Facebook</a> |
                <a href="https://github.com/senor-coco" target="_blank">GitHub</a>
            </div>
        </div>

        <div class="profile-card">
            <img src="vista/imagenes/jpg/jorge.jpeg" alt="Jorge Alejandro Macias Guzmán" class="profile-image">
            <div class="profile-name">Jorge Alejandro Macias Guzmán</div>
            <div class="profile-email">jorge.macias79@unach.mx</div>
            <div class="profile-socials">
                <a href="https://www.facebook.com/jorgealejandro.maciasguzman.9?mibextid=ZbWKwL" target="_blank">Facebook</a> |
                <a href="https://github.com/jorge-alejandroo" target="_blank">GitHub</a>
            </div>
        </div>

        <!-- Perfiles movidos hacia abajo -->
        <div style="flex-basis: 100%; height: 0;"></div> <!-- Línea para romper la fila -->

        <div class="profile-card">
            <img src="vista/imagenes/jpg/antonio.jpeg" alt="Luis Antonio Trujillo Hernandez" class="profile-image">
            <div class="profile-name">Luis Antonio Trujillo Hernandez</div>
            <div class="profile-email">luis.trujillo@unach.mx</div>
            <div class="profile-socials">
                <a href="https://www.facebook.com/profile.php?id=100072249008527&mibextid=ZbWKwL" target="_blank">Facebook</a> |
                <a href="https://github.com/Beowulf-Lab" target="_blank">GitHub</a>
            </div>
        </div>

        <div class="profile-card">
            <img src="vista/imagenes/jpg/itzel.jpeg" alt="Itzel Guadalupe Jimenez Gomez" class="profile-image">
            <div class="profile-name">Itzel Guadalupe Jimenez Gomez</div>
            <div class="profile-email">itzel.gomez43@unach.mx</div>
            <div class="profile-socials">
                <a href="https://github.com/ItzelJimenez21" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
require_once('vista/layout/footer.php');
?>
<?