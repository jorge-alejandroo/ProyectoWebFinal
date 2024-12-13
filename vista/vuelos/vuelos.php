<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php'); // Incluir header
require_once('vista/servicio/mostrarServicio.php');

// Estilo dinámico para la burbuja
$headerStyle = "position: absolute; top: 230px; left: 700px; width: 500px;";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos - Chiapas Tours</title>
    <style>
        /* Fondo principal con la imagen de "fondodevuelos" */
        body {
            background-image: url('vista/imagenes/jpg/fondodevuelos.jpg'); /* Imagen de fondo */
            background-size: cover; /* Escala para cubrir la pantalla */
            background-position: center; /* Centrar la imagen */
            background-attachment: fixed; /* Fija la imagen en su posición */
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Estilo de la burbuja */
        .header-bubble {
            background-color: rgba(240, 240, 240, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            font-size: 1.8em;
            font-weight: bold;
            color: #333;
        }

        /* Contenedor de aerolíneas */
        .container {
            max-width: 1200px;
            margin: 100px auto 50px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .airlines-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .airline-card {
            width: 200px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .airline-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .airline-card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .airline-name {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }
        /* Banner inferior dinámico */
.bottom-banner {
    background-image: none; /* Elimina la imagen de fondo previamente establecida */
    background-size: auto; /* Restablece el tamaño del fondo a su valor predeterminado */
    background-repeat: repeat; /* Restablece la repetición del fondo a su valor predeterminado */
    position: fixed;
    transition: all 0.3s ease-in-out; /* Mantiene la transición suave para otros cambios de estilo */
}


    </style>
</head>
<body>
    <!-- Burbuja dinámica -->
    <div class="header-bubble" style="<?= $headerStyle; ?>">
        Aerolíneas Asociadas
    </div>

    <div class="container">
        <div class="airlines-container">
            <!-- Viva Aerobus -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/vivaaerobus.jpg" alt="Viva Aerobus">
                <div class="airline-name">Viva Aerobus</div>
            </div>

            <!-- Magnicharters -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/magnicharters.jpg" alt="Magnicharters">
                <div class="airline-name">Magnicharters</div>
            </div>

            <!-- TAR Aerolíneas -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/taraerolíneas.jpg" alt="TAR Aerolíneas">
                <div class="airline-name">TAR Aerolíneas</div>
            </div>

            <!-- Aeromar -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/aeromar.jpg" alt="Aeromar">
                <div class="airline-name">Aeromar</div>
            </div>

            <!-- Interjet -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/interjet.jpeg" alt="Interjet">
                <div class="airline-name">Interjet</div>
            </div>

            <!-- Volaris -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/volaris.jpg" alt="Volaris">
                <div class="airline-name">Volaris</div>
            </div>

            <!-- Aeroméxico -->
            <div class="airline-card">
                <img src="vista/imagenes/jpg/aeroméxico.jpg" alt="Aeroméxico">
                <div class="airline-name">Aeroméxico</div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
