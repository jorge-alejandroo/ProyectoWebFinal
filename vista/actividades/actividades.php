<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php'); // Incluir header
require_once('vista/servicio/mostrarServicio.php');

// Estilo dinámico para la burbuja
$headerStyle = "position: absolute; top: 230px; left: 700px; width: 500px; text-align: center; background-color: rgba(240, 240, 240, 0.9); padding: 10px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 1.8em; font-weight: bold; color: #333;";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodeactividadesdeviaje.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Contenedor general */
        .container {
            max-width: 1200px;
            margin: 100px auto 50px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Estilo de la sección */
        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 15px;
        }

        .activity {
            font-size: 1em;
            color: #555;
            line-height: 1.6;
        }

        .activity img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 10px auto;
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
        Actividades
    </div>
    
    <div class="container">
        <!-- Actividades Culturales -->
        <div class="section">
            <div class="section-title">Actividades Culturales</div>
            <div class="activity">
                <p><strong>Tour por Chichen Itzá</strong> (Paquete Caribe Mexicano - Cancún): Visita a una de las principales ruinas mayas, un sitio Patrimonio de la Humanidad.</p>
                <p><strong>Tour tequila y visita a Tlaquepaque</strong> (Encantos de Guadalajara): Explora la cultura del tequila y las artesanías en uno de los pueblos más pintorescos.</p>
                <p><strong>Clase de cocina oaxaqueña y visita a Monte Albán</strong> (Explora Oaxaca): Aprende sobre la gastronomía local y explora ruinas zapotecas.</p>
            </div>
        </div>

        <!-- Actividades de Aventura -->
        <div class="section">
            <div class="section-title">Actividades de Aventura</div>
            <div class="activity">
                <p><strong>Snorkel en el arrecife</strong> (Paquete Caribe Mexicano - Cancún): Descubre la biodiversidad marina del Caribe.</p>
                <p><strong>Paseo en barco al Arco y clase de surf</strong> (Aventura en Cabo San Lucas): Combina un tour marítimo con una clase de surf en las olas del Pacífico.</p>
                <p><strong>Rafting en el río Lacanja</strong> (Descubrimiento de Chiapas): Aventura en las rápidas aguas del río en medio de la selva chiapaneca.</p>
                <p><strong>Buceo en coral y kayak en bahías</strong> (Aventura en Huatulco): Explora los arrecifes y rema en las tranquilas bahías de Huatulco.</p>
            </div>
        </div>

        <!-- Actividades de Relajación y Bienestar -->
        <div class="section">
            <div class="section-title">Actividades de Relajación y Bienestar</div>
            <div class="activity">
                <p><strong>Yoga y senderismo al Tepozteco</strong> (Retiro Espiritual en Tepoztlán): Combinación de relajación y actividad física en un entorno natural energizante.</p>
                <p><strong>Tour en el Chepe y visita a las Barrancas del Cobre</strong> (Lujo en Los Mochis): Viaje en tren a través de impresionantes paisajes y exploración de cañones.</p>
            </div>
        </div>

        <!-- Actividades Recreativas -->
        <div class="section">
            <div class="section-title">Actividades Recreativas</div>
            <div class="activity">
                <p><strong>Paravelismo y tour de snorkel en Los Arcos</strong> (Escapada a Puerto Vallarta): Disfruta de las vistas aéreas y la vida marina en un entorno tropical.</p>
                <p><strong>Visita a Uxmal y cenotes cercanos</strong> (Descubre Mérida): Explora antiguas ruinas mayas y refresca en cenotes naturales.</p>
            </div>
        </div>

        <!-- Actividades Especiales -->
        <div class="section">
            <div class="section-title">Actividades Especiales</div>
            <div class="activity">
                <p><strong>Tour por las ruinas de Palenque</strong> (Descubrimiento de Chiapas): Un viaje a través de la historia maya en uno de sus sitios más importantes.</p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
