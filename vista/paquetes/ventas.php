<?php

// Array de paquetes con datos relevantes

$paquetes = [
    [
        "nombre" => "Paquete Caribe Mexicano - Cancún",
        "precio" => "$18,525 MXN por persona",
        "descripcion" => "¡Explora Cancún y vive una aventura inolvidable bajo el sol! Perfecto para grupos que buscan diversión y cultura.",
        "imagen" => "vista/imagenes/jpg/cancún.jpeg",
        "detalles" => "Hotel: Hotel Caribe Playa<br>Vuelos: Ciudad de México a Cancún<br>Actividades: Snorkel en el arrecife y tour por Chichen Itzá<br>Transporte alternativo: Van privada desde Playa del Carmen<br>Oferta especial: Para grupos de 4, quinta persona gratis."
    ],
    [
        "nombre" => "Aventura en Cabo San Lucas",
        "precio" => "$21,450 MXN por persona",
        "descripcion" => "Desconéctate en las hermosas costas de Cabo con actividades llenas de adrenalina.",
        "imagen" => "vista/imagenes/jpg/cabo.jpeg",
        "detalles" => "Hotel: Baja Beach Resort<br>Vuelos: Guadalajara a Los Cabos<br>Actividades: Paseo en barco al Arco y clase de surf<br>Transporte alternativo: Alquiler de coche<br>Oferta especial: 20% descuento en actividades acuáticas."
    ],
    [
        "nombre" => "Descubrimiento de Chiapas",
        "precio" => "$17,550 MXN por persona",
        "descripcion" => "Vive la magia de Chiapas con un paquete ideal para familias. Explora la historia y la naturaleza con tus seres queridos.",
        "imagen" => "vista/imagenes/jpg/chiapas.jpeg",
        "detalles" => "Hotel: Eco-Hotel Selva<br>Vuelos: Monterrey a Tuxtla Gutiérrez<br>Actividades: Tour por las ruinas de Palenque y rafting en el río Lacanja<br>Transporte alternativo: Autobús de aventura<br>Oferta especial: Paquete familiar, niños viajan gratis."
    ],
    [
        "nombre" => "Encantos de Guadalajara",
        "precio" => "$14,625 MXN por persona",
        "descripcion" => "Descubre la rica cultura de Guadalajara y disfruta de una noche extra gratis. Ideal para amantes del buen vivir.",
        "imagen" => "vista/imagenes/jpg/guadalajara.jpeg",
        "detalles" => "Hotel: Hotel Colonial Guadalajara<br>Vuelos: Ciudad de México a Guadalajara<br>Actividades: Tour tequila y visita a Tlaquepaque<br>Transporte alternativo: Renting de autos<br>Oferta especial: Tercer noche gratis."
    ],
    [
        "nombre" => "Explora Oaxaca",
        "precio" => "$16,575 MXN por persona",
        "descripcion" => "Sumérgete en la historia y la gastronomía de Oaxaca. Aprovecha el descuento en tours culturales y enriquece tu viaje.",
        "imagen" => "vista/imagenes/jpg/oaxaca.jpeg",
        "detalles" => "Hotel: Oaxaca Real Hotel<br>Vuelos: Tijuana a Oaxaca<br>Actividades: Clase de cocina oaxaqueña y visita a Monte Albán<br>Transporte alternativo: Servicio de shuttle<br>Oferta especial: 10% descuento en tours culturales."
    ],
    [
        "nombre" => "Escapada a Puerto Vallarta",
        "precio" => "$19,500 MXN por persona",
        "descripcion" => "Disfruta de las playas de Puerto Vallarta y una cena gratuita en tu estadía. Perfecto para relajarte y aventurarte en el mar.",
        "imagen" => "vista/imagenes/jpg/puertovallarta.jpeg",
        "detalles" => "Hotel: Vallarta Sun Resort<br>Vuelos: Ciudad de México a Puerto Vallarta<br>Actividades: Paravelismo y tour de snorkel en Los Arcos<br>Transporte alternativo: Mini-van para grupos<br>Oferta especial: Cena gratis en el hotel."
    ],
    [
        "nombre" => "Aventura en Huatulco",
        "precio" => "$16,965 MXN por persona",
        "descripcion" => "Explora las cristalinas aguas de Huatulco y ahorra con nuestra oferta de reserva anticipada. Una aventura acuática te espera.",
        "imagen" => "vista/imagenes/jpg/huatulco.jpeg",
        "detalles" => "Hotel: Huatulco Bay Hotel<br>Vuelos: Puebla a Huatulco<br>Actividades: Buceo en coral y kayak en bahías<br>Transporte alternativo: Bicicletas eléctricas<br>Oferta especial: Descuento del 15% para reservas anticipadas."
    ],
    [
        "nombre" => "Retiro Espiritual en Tepoztlán",
        "precio" => "$15,210 MXN por persona",
        "descripcion" => "Renueva tu espíritu en Tepoztlán con sesiones de yoga y un regalo de spa. Un retiro para rejuvenecer cuerpo y mente.",
        "imagen" => "vista/imagenes/jpg/tepoztlán.jpeg",
        "detalles" => "Hotel: Posada del Tepozteco<br>Vuelos: Veracruz a Ciudad de México, luego transporte a Tepoztlán<br>Actividades: Yoga y senderismo al Tepozteco<br>Transporte alternativo: Autobús directo<br>Oferta especial: Sesión de spa gratis."
    ],
    [
        "nombre" => "Lujo en Los Mochis",
        "precio" => "$22,425 MXN por persona",
        "descripcion" => "Experimenta el lujo y la aventura en Los Mochis. Recibe una cálida bienvenida con una exclusiva botella de vino.",
        "imagen" => "vista/imagenes/jpg/mochis.jpeg",
        "detalles" => "Hotel: Plaza Inn Hotel<br>Vuelos: Durango a Culiacán, transporte a Los Mochis<br>Actividades: Tour en el Chepe y visita a las Barrancas del Cobre<br>Transporte alternativo: Renta de camioneta SUV<br>Oferta especial: Botella de vino de bienvenida."
    ],
    [
        "nombre" => "Descubre Mérida",
        "precio" => "$17,940 MXN por persona",
        "descripcion" => "Explora la histórica Mérida y sus maravillas naturales con la ayuda de un guía privado gratuito. Una escapada cultural única.",
        "imagen" => "vista/imagenes/jpg/mérida.jpeg",
        "detalles" => "Hotel: Mérida Blanc Hotel<br>Vuelos: León a Mérida<br>Actividades: Visita a Uxmal y cenotes cercanos<br>Transporte alternativo: Scooters eléctricos<br>Oferta especial: Guía privado gratis en tours."
    ]
];

// Leer el índice del paquete desde el parámetro GET
$paqueteIndex = isset($_GET['paquete']) ? (int)$_GET['paquete'] : null;

if ($paqueteIndex === null || !isset($paquetes[$paqueteIndex])) {
    die("Paquete no encontrado.");
}

// Obtener los datos del paquete seleccionado
$paquete = $paquetes[$paqueteIndex];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($paquete["nombre"]) ?></title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('vista/imagenes/jpg/compraviajes.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            color: #333;
        }

        .main-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .back-btn-container {
            text-align: left;
            margin-bottom: 20px;
        }

        .back-btn {
            color: #007bff;
            text-decoration: none;
            font-size: 1em;
            padding: 5px 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .back-btn:hover {
            background-color: #007bff;
            color: #fff;
        }

        .content-wrapper {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .image-container {
            flex: 1 1 40%;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .info-container {
            flex: 1 1 55%;
        }

        .tag {
            display: inline-block;
            padding: 6px 12px;
            background-color: #f5f5f5;
            font-weight: bold;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .price {
            font-size: 1.8em;
            color: #333;
            font-weight: bold;
            margin: 10px 0;
        }

        .description {
            margin: 15px 0;
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
        }

        .details {
            margin: 15px 0;
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }

        .buy-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .buy-button:hover {
            background-color: #218838;
        }

        .date-picker {
            margin-top: 30px;
        }

        .date-picker label {
            font-size: 1em;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .date-picker input {
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            border: 1px solid #ddd;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
    <script>
        function confirmPurchase() {
            const paymentType = prompt("Ingrese el tipo de pago (tarjeta, transferencia, etc.):");
            if (paymentType) {
                alert("Procesando pago con: " + paymentType);
                window.location.href = 'misviajes.php';
            }
        }
    </script>
</head>
<body>
    <div class="main-container">
        <!-- Botón de regreso -->
        <div class="back-btn-container">
            <a href="http://localhost/proyectoweb/index.php?i=paquetes" class="back-btn">Regresar a Paquetes</a>
        </div>

        <!-- Contenido principal -->
        <div class="content-wrapper">
            <!-- Imagen -->
            <div class="image-container">
                <img src="<?= htmlspecialchars($paquete['imagen']) ?>" alt="<?= htmlspecialchars($paquete['nombre']) ?>">
            </div>

            <!-- Información -->
            <div class="info-container">
                <div class="tag">Paquete <?= $paqueteIndex + 1 ?></div>
                <div class="price"><?= htmlspecialchars($paquete['precio']) ?></div>
                <p class="description"><?= htmlspecialchars($paquete['descripcion']) ?></p>
                <div class="details">
                    <?= $paquete['detalles'] ?>
                </div>
                <a href="#" class="buy-button" onclick="confirmPurchase()">Comprar</a>
            </div>
        </div>

        <!-- Selección de Fecha -->
        <div class="date-picker">
            <label for="date">Fecha de Viaje</label>
            <input type="date" id="date">
            <button class="buy-button">Seleccionar Fecha</button>
        </div>
    </div>
</body>
</html>