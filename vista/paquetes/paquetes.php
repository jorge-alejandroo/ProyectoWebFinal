<?php
$mostrarPaquetes = false; // Ocultar paquetes más solicitados si es necesario
require_once('vista/layout/header.php');

// Estilo dinámico para la burbuja
$headerStyle = "position: absolute; top: 230px; left: 700px; width: 500px; text-align: center; background-color: rgba(240, 240, 240, 0.9); padding: 10px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 1.8em; font-weight: bold; color: #333;";
require_once('vista/servicio/mostrarServicio.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes - Chiapas Tours</title>
    <style>
        /* Fondo principal */
        body {
            background-image: url('vista/imagenes/jpg/fondodepaquetes1.jpg'); /* Imagen de fondo */
            background-size: cover; /* Escala para cubrir la pantalla */
            background-position: center; /* Centrar la imagen */
            background-attachment: fixed; /* Fija la imagen en su posición */
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

        /* Contenedor de paquetes */
        .packages-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px; /* Espacio entre tarjetas */
        }

        /* Tarjeta de paquete */
        .package-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .package-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .package-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .package-name {
            font-size: 1.3em;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .package-details {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .package-price {
            font-size: 1.2em;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
        }

        .package-description {
            font-size: 0.85em;
            color: #666;
            margin-top: 10px;
            line-height: 1.4;
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
<div id="paquetes-header-bubble" class="header-bubble" style="<?= $headerStyle; ?>">
    Nuestros Paquetes
</div>


    <div class="container">
        <div class="packages-container">
            <!-- Paquete 1 -->
            <?php foreach ($paquetes as $paquete): ?>
                <div class="package-card">
                    <img src="vista/imagenes/jpg/<?= htmlspecialchars($paquete['imagen']); ?>" alt="<?= htmlspecialchars($paquete['Nombre']); ?>">
                    <div class="package-name"><?= htmlspecialchars($paquete['Nombre']); ?></div>
                    <div class="package-details"><?= htmlspecialchars($paquete['Descripcion']); ?></div>
                    <div class="package-activities"><?= htmlspecialchars($paquete['Actividades']); ?></div>
                    <div class="package-alternative-transport"><?= htmlspecialchars($paquete['Transporte_Alternativo']); ?></div>
                    <div class="package-special-offer"><?= htmlspecialchars($paquete['Oferta_Especial']); ?></div>
                    <div class="package-price"><?= htmlspecialchars($paquete['Costo']); ?></div>

            <div class="vista/paquetes/ventas.php?paquete=' . $index . '" class="buy-link">Ver detalles</a>

                <a href="vista/paquetes/ventas.php?paquete=' . $index . '" class="buy-link">Ver detalles</a>
            </div>';
                </div>

            
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

<?php
require_once('vista/layout/footer.php'); // Incluir footer
?>
