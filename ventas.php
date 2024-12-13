<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquete de Viaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            display: flex;
            gap: 20px;
            max-width: 900px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .image-container img {
            width: 100%;
            border-radius: 8px;
        }
        .info-container {
            width: 100%;
        }
        .tag {
            display: inline-block;
            padding: 4px 8px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 4px;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
        .price {
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        .dropdowns {
            display: flex;
            gap: 10px;
            margin: 10px 0;
        }
        select, input[type="date"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .buy-button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .description {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
        .date-picker {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 200px;
            margin-top: 20px;
        }
        .date-picker input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            text-align: center;
        }
        .date-picker button {
            padding: 6px 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        function confirmPurchase() {
            const paymentType = prompt("Ingrese el tipo de pago (tarjeta, transferencia, etc.):");
            if (paymentType) {
                // Aquí podría ir una llamada AJAX para procesar el pago
                alert("Procesando pago con: " + paymentType);
                // Simulación de guardado en base de datos y redirección
                window.location.href = 'misviajes.php'; // Asumiendo que existe esta página
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- Imagen -->
        <div class="image-container">
            <img src="imagen.jpg" alt="Imagen del destino">
        </div>
        
        <!-- Información -->
        <div class="info-container">
            <?php
            // PHP para conectar a la base de datos y cargar hoteles y transportes
            include 'conexion.php'; // Asegúrate de tener este archivo para la conexión a DB
            $hoteles = $conn->query("SELECT id, nombre FROM hoteles");
            $transportes = $conn->query("SELECT id, tipo FROM transportes");
            ?>
            <div class="tag">Tag</div>
            <div class="price">$25,000</div>
            <p>Descripción del paquete de viaje.</p>
            
            <!-- Dropdowns -->
            <div class="dropdowns">
                <select>
                    <option>Escoger Hotel</option>
                        echo '<option value="' . $hotel['id'] . '">' . $hotel['nombre'] . '</option>';
                    } ?>
                </select>
                <select>
                    <option>Tipo de Transporte</option>
                    <?php while ($transporte = $transportes->fetch_assoc()) {
                        echo '<option value="' . $transporte['id'] . '">' . $transporte['tipo'] . '</option>';
                    } ?>
                </select>
            </div>

            <!-- Botón de compra -->
            <button class="buy-button" onclick="confirmPurchase()">Buy</button>

            <!-- Descripción -->
            <div class="description">
                <p>Paquete de viaje con hotel + vuelo incluido con un descuento de temporada.</p>
            </div>
        </div>
    </div>

    <!-- Selección de Fecha -->
    <div class="date-picker">
        <label for="date">Insertar Fecha</label>
        <input type="date" id="date">
        <button>OK</button>
    </div>
</body>
</html>
