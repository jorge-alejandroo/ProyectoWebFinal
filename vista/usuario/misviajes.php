<?php 
require_once('vista/layout/header.php'); // Incluye el encabezado
require_once('vista/servicio/mostrarServicio.php');

// Posición del encabezado (modifica aquí para ajustar la posición)
$headerStyle = "position: absolute; top: 234px; left: 810px; text-align: left;";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            max-width: 1000px;
            margin: 120px auto 50px;
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .trip-item {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            background-color: #fafafa;
            transition: transform 0.3s ease;
        }
        .trip-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        .trip-item img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
        }
        .trip-details {
            flex: 1;
        }
        .trip-details h4 {
            margin: 0;
            font-size: 1.3em;
            color: #333;
            margin-bottom: 10px;
        }
        .trip-details p {
            margin: 5px 0;
            color: #555;
            font-size: 0.95em;
        }
        .trip-price-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
        }
        .trip-price {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
            text-align: right;
        }
        .old-price {
            font-size: 1em;
            color: #bbb;
            text-decoration: line-through;
            text-align: right;
            margin-top: 5px;
        }
        .back-btn-container {
            text-align: center;
            margin-top: 30px;
        }
        .back-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 1em;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }
        .back-btn:hover {
            background-color: #0056b3;
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

<!-- Encabezado "Historial de Viajes" -->
<div style="margin-bottom: 20px; padding: 10px; background-color: rgba(240, 240, 240, 0.9); border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); <?= $headerStyle; ?>">
    <h2 style="font-size: 1.8em; font-weight: bold; color: #333;">Historial de Viajes</h2>
</div>

<div class="container">
    <!-- Lista de paquetes de viaje -->
    <div class="trip-item">
        <img src="paris-las-vegas.jpg" alt="Paris Las Vegas">
        <div class="trip-details">
            <h4>Paris Las Vegas Resort & Casino</h4>
            <p>Las Vegas, South Las Vegas • 1.14 km del centro</p>
            <p>Vuelo + Alojamiento • Precio final por persona</p>
            <span class="old-price">MXN$14,200</span>
        </div>
        <div class="trip-price">MXN$12,000</div>
    </div>

    <div class="trip-item">
        <img src="wynn-las-vegas.jpg" alt="Wynn Las Vegas">
        <div class="trip-details">
            <h4>Wynn Las Vegas</h4>
            <p>Las Vegas, South Las Vegas • 1.49 km del centro</p>
            <p>Vuelo + Alojamiento • Precio final por persona</p>
            <span class="old-price">MXN$22,444</span>
        </div>
        <div class="trip-price">MXN$20,500</div>
    </div>

    <div class="trip-item">
        <img src="impressive-punta-cana.jpg" alt="Impressive Punta Cana">
        <div class="trip-details">
            <h4>Impressive Punta Cana - All inclusive</h4>
            <p>Punta Cana, Bávaro • 15.59 km del centro</p>
            <p>Vuelo + Alojamiento • Precio final por persona</p>
            <span class="old-price">MXN$29,444</span>
        </div>
        <div class="trip-price">MXN$20,980</div>
    </div>
</div>

<!-- Botón de regreso a la página principal -->
<div class="back-btn-container">
    <a href="index.php" class="back-btn">Regresar a la página principal</a>
</div>

</body>
</html>

<?php 
require_once('vista/layout/footer.php'); // Incluye el pie de página
?>
