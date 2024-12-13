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
    <title>Hoteles - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodehotoles.jpeg'); /* Imagen de fondo */
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

        /* Contenedor de hoteles */
        .hotels-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Espacio entre tarjetas */
        }

        /* Tarjeta de hotel */
        .hotel-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .hotel-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .hotel-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .hotel-name {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .hotel-details {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
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
    <div style="<?= $headerStyle; ?>">
        Nuestros Hoteles
    </div>

    <div class="container">
        <div class="hotels-container">
            <!-- Hotel 1 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/hotelplazacaribe.jpeg" alt="Hotel Caribe Playa">
                <div class="hotel-name">Hotel Caribe Playa - Cancún</div>
                <div class="hotel-details">
                    Ubicación: Frente a las hermosas playas de Cancún.<br>
                    Características: Habitaciones con vista al mar, acceso directo a la playa, spa, y múltiples restaurantes.
                </div>
            </div>

            <!-- Hotel 2 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/hotelbajabeachresort.jpeg" alt="Baja Beach Resort">
                <div class="hotel-name">Baja Beach Resort - Cabo San Lucas</div>
                <div class="hotel-details">
                    Ubicación: En la costa de Cabo San Lucas.<br>
                    Características: Complejo de lujo con deportes acuáticos, suites con jacuzzi y vistas panorámicas del Arco.
                </div>
            </div>

            <!-- Hotel 3 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/ecohotelselva.jpeg" alt="Eco-Hotel Selva">
                <div class="hotel-name">Eco-Hotel Selva - Chiapas</div>
                <div class="hotel-details">
                    Ubicación: En el corazón de la selva de Chiapas.<br>
                    Características: Diseño ecológico, actividades de ecoturismo y proximidad a sitios arqueológicos.
                </div>
            </div>

            <!-- Hotel 4 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/hotelcolonialguadalajara.jpeg" alt="Hotel Colonial Guadalajara">
                <div class="hotel-name">Hotel Colonial Guadalajara - Guadalajara</div>
                <div class="hotel-details">
                    Ubicación: Centro histórico de Guadalajara.<br>
                    Características: Arquitectura colonial, modernas instalaciones y cercanía a atractivos culturales.
                </div>
            </div>

            <!-- Hotel 5 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/oaxacarealhotel.jpeg" alt="Oaxaca Real Hotel">
                <div class="hotel-name">Oaxaca Real Hotel - Oaxaca</div>
                <div class="hotel-details">
                    Ubicación: Centro de Oaxaca.<br>
                    Características: Ambiente tradicional, restaurante de comida típica y terraza con vistas a las montañas.
                </div>
            </div>

            <!-- Hotel 6 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/vallartasunresort.jpeg" alt="Vallarta Sun Resort">
                <div class="hotel-name">Vallarta Sun Resort - Puerto Vallarta</div>
                <div class="hotel-details">
                    Ubicación: A pocos pasos de la playa.<br>
                    Características: Piscina infinita, actividades de playa y noches de entretenimiento en vivo.
                </div>
            </div>

            <!-- Hotel 7 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/huatulcobayhotel.jpeg" alt="Huatulco Bay Hotel">
                <div class="hotel-name">Huatulco Bay Hotel - Huatulco</div>
                <div class="hotel-details">
                    Ubicación: Bahías de Huatulco.<br>
                    Características: Acceso a playas privadas, tours de snorkel y gastronomía basada en mariscos frescos.
                </div>
            </div>

            <!-- Hotel 8 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/posadadeltepozteco.jpeg" alt="Posada del Tepozteco">
                <div class="hotel-name">Posada del Tepozteco - Tepoztlán</div>
                <div class="hotel-details">
                    Ubicación: Al pie del cerro del Tepozteco.<br>
                    Características: Retiro espiritual con clases de yoga, spa holístico y jardines para meditación.
                </div>
            </div>

            <!-- Hotel 9 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/plazainnhotel.jpeg" alt="Plaza Inn Hotel">
                <div class="hotel-name">Plaza Inn Hotel - Los Mochis</div>
                <div class="hotel-details">
                    Ubicación: Centro de Los Mochis.<br>
                    Características: Elegante decoración, servicios de negocios y cercanía a la estación del Chepe.
                </div>
            </div>

            <!-- Hotel 10 -->
            <div class="hotel-card">
                <img src="vista/imagenes/jpg/méridablanchotel.jpeg" alt="Mérida Blanc Hotel">
                <div class="hotel-name">Mérida Blanc Hotel - Mérida</div>
                <div class="hotel-details">
                    Ubicación: Centro histórico de Mérida.<br>
                    Características: Diseño moderno con toques coloniales, piscina al aire libre y acceso a museos.
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
