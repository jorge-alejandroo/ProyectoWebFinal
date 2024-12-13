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
    <title>Transportes - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodetransportes.jpg'); /* Imagen de fondo */
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

        /* Contenedor de transportes */
        .transports-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Espacio entre tarjetas */
        }

        /* Tarjeta de transporte */
        .transport-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .transport-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .transport-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .transport-name {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .transport-details {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .transport-cost {
            font-size: 1.2em;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
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
        Nuestros Transportes
    </div>
    
    <div class="container">
        <div class="transports-container">
            <!-- Transporte 1 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/colectivo.jpg" alt="Colectivo">
                <div class="transport-name">Colectivo</div>
                <div class="transport-details">
                    Vehículos pequeños y flexibles, ideales para rutas cortas o menos transitadas, como pueblos rurales o accesos a playas escondidas.<br>
                    Vinculación con paquetes: Descubrimiento de Chiapas.
                </div>
                <div class="transport-cost">$20-50 MXN por viaje</div>
            </div>

            <!-- Transporte 2 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/autobusesado.jpg" alt="Autobuses ADO">
                <div class="transport-name">Autobuses ADO</div>
                <div class="transport-details">
                    Ofrece servicios desde económicos hasta de lujo, perfectos para viajes interurbanos cómodos y seguros.<br>
                    Vinculación con paquetes: Retiro Espiritual en Tepoztlán.
                </div>
                <div class="transport-cost">$300-900 MXN por viaje</div>
            </div>

            <!-- Transporte 3 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/mercedesbenztourismo.jpg" alt="Mercedes-Benz Tourismo">
                <div class="transport-name">Mercedes-Benz Tourismo</div>
                <div class="transport-details">
                    Bus de lujo para viajes largos, con todas las comodidades modernas para garantizar un viaje placentero.<br>
                    Vinculación con paquetes: Lujo en Los Mochis.
                </div>
                <div class="transport-cost">$1,500-3,000 MXN por día</div>
            </div>

            <!-- Transporte 4 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/volvo9700luxurybus.jpg" alt="Volvo 9700 Luxury Bus">
                <div class="transport-name">Volvo 9700 Luxury Bus</div>
                <div class="transport-details">
                    Con tecnología de vanguardia y asientos reclinables, ideal para grupos grandes que buscan confort en trayectos largos.<br>
                    Vinculación con paquetes: Aventura en Cabo San Lucas.
                </div>
                <div class="transport-cost">$2,000-4,000 MXN por día</div>
            </div>

            <!-- Transporte 5 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/hondaodyssey.jpg" alt="Honda Odyssey">
                <div class="transport-name">Honda Odyssey</div>
                <div class="transport-details">
                    Minivan confortable con capacidad para hasta 8 personas, ideal para familias o pequeños grupos.<br>
                    Vinculación con paquetes: Descubrimiento de Chiapas.
                </div>
                <div class="transport-cost">$1,000-2,000 MXN por día</div>
            </div>

            <!-- Transporte 6 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/chryslerpacifica.jpg" alt="Chrysler Pacifica">
                <div class="transport-name">Chrysler Pacifica</div>
                <div class="transport-details">
                    Una minivan moderna y espaciosa, perfecta para grupos que buscan un vehículo seguro y cómodo.<br>
                    Vinculación con paquetes: Escapada a Puerto Vallarta.
                </div>
                <div class="transport-cost">$1,200-2,500 MXN por día</div>
            </div>

            <!-- Transporte 7 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/mercedesbenzsprinter.jpg" alt="Mercedes-Benz Sprinter">
                <div class="transport-name">Mercedes-Benz Sprinter</div>
                <div class="transport-details">
                    Van robusta y espaciosa, con capacidad para hasta 15 pasajeros, excelente para traslados de grupos grandes.<br>
                    Vinculación con paquetes: Explora Oaxaca.
                </div>
                <div class="transport-cost">$1,800-3,500 MXN por día</div>
            </div>

            <!-- Transporte 8 -->
            <div class="transport-card">
                <img src="vista/imagenes/jpg/volkswagentransporter.jpg" alt="Volkswagen Transporter">
                <div class="transport-name">Volkswagen Transporter</div>
                <div class="transport-details">
                    Van duradera con gran capacidad de almacenamiento, ideal para aventuras y actividades al aire libre.<br>
                    Vinculación con paquetes: Aventura en Huatulco.
                </div>
                <div class="transport-cost">$1,500-2,800 MXN por día</div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
