<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Comparación</title>
    <link rel="website icon" type="png" href="imagenes/Tecnoventas.png">
    <link rel="stylesheet" href="css/styleCompara.css">
</head>
<body>

    <h1>RESULTADOS DE COMPARACION</h1>

    <?php
        // Definir un array asociativo con las características de los productos (incluyendo URLs de imágenes)
        $caracteristicas = array(
            'Audifonos Sony In Ear WFC700N' => array(
                'Precio' => '$290.000',
                'Resistencia A' => 'Salpicaduras',
                'Opciones De Conectividad' => 'Bluetooth',
                'Duracion De La Bateria' => '20 Horas Aprx',
                'Conexion' => 'Inalambrica',
                'Color' => 'Negro',
                'Longitud Del Cable cm' => 'N/A',
                'imagen' => 'imagenes/productos/audifonosSonyInEarWFC700N.png'// Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Audifonos BOSE In Ear EarbudsII' => array(
                'Precio' => '$1.799.900',
                'Resistencia A' => 'Resistente a Salpicaduras (IPX4) ',
                'Opciones De Conectividad' => 'Bluetooth',
                'Duracion De La Bateria' => '6 Horas Aprx',
                'Conexion' => 'Inalambrica',
                'Color' => 'Eclipse Grey ',
                'Longitud Del Cable cm' => 'N/A',
                'imagen' => 'imagenes/productos/Audifonos BOSE In Ear QuietComfort EarbudsII Gris.png'
            ),
            'Audífonos APPLE AirPods Pro 2.ª Generación' => array(
                'Precio' => '$1.229.000',
                'Resistencia A' => 'Resistente a Salpicaduras (IPX4)',
                'Opciones De Conectividad' => 'Bluetooth',
                'Duracion De La Bateria' => '6 Horas Aprx',
                'Conexion' => 'Inalambrica',
                'Color' => 'Blanco ',
                'Longitud Del Cable cm' => 'N/A',
                'imagen' => 'imagenes/productos/Audífonos APPLE AirPods Pro 2.ª Generación.png'
            ),
            'Audífonos PANASONIC In Ear' => array(
                'Precio' => '$14.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Conexión Con Cable ',
                'Duracion De La Bateria' => 'N/A',
                'Conexion' => 'Alambrica',
                'Color' => 'Negro',
                'Longitud Del Cable cm' => '120  Centímetros',
                'imagen' => 'imagenes/productos/Audífonos PANASONIC Alámbricos In Ear RP-HV096P Negro.png'
            ),
            'Audífonos XIAOMI Alámbricos InEar Basic Plateado' => array(
                'Precio' => '$32.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Conexión Con Cable ',
                'Duracion De La Bateria' => 'N/A',
                'Conexion' => 'Alambrica',
                'Color' => 'Plateado ',
                'Longitud Del Cable cm' => '60  Centímetros',
                'imagen' => 'imagenes/productos/Audífonos XIAOMI Alámbricos InEar Basic Plateado.png'
            ),
            'Audífonos SONY Alámbricos In Ear' => array(
                'Precio' => '$39.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Conexión Con Cable ',
                'Duracion De La Bateria' => 'N/A',
                'Conexion' => 'Alambrica',
                'Color' => 'Negro',
                'Longitud Del Cable cm' => '120  Centímetros',
                'imagen' => 'imagenes/productos/Audífonos SONY Alámbricos In Ear Manos Libres MDR-EX15AP Blanco.png'
            ),
            'Audífonos  SONY Inalámbricos Over Ear' => array(
                'Precio' => '$999.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Bluetooth <br>Conexión Con Cable NFC ',
                'Duracion De La Bateria' => '30  Horas Aproximadas',
                'Conexion' => 'Inalambrica',
                'Color' => 'Negro',
                'Longitud Del Cable cm' => '120  Centímetros',
                'imagen' => 'imagenes/productos/SONY Inalámbricos Bluetooth Over Ear WH-1000XM4.png'
            ),
            'Audífonos SONY Inalámbricos On Ear' => array(
                'Precio' => '$199.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Bluetooth',
                'Duracion De La Bateria' => '50  Horas Aproximadas',
                'Conexion' => 'Inalambrica',
                'Color' => 'Azul',
                'Longitud Del Cable cm' => 'N/A',
                'imagen' => 'imagenes/productos/SONY Inalámbricos Bluetooth On Ear WH-CH520.png'
            ),
            'Audífonos BOSE Inalámbricos Over Ear 7' => array(
                'Precio' => '$1.799.900',
                'Resistencia A' => 'N/A',
                'Opciones De Conectividad' => 'Bluetooth',
                'Duracion De La Bateria' => 'Alambrica',
                'Conexion' => '20 Horas Aproximadas',
                'Color' => 'Negro',
                'Longitud Del Cable cm' => 'N/A',
                'imagen' => 'imagenes/productos/BOSE Inalámbricos Bluetooth Over Ear 700.png'
            ),
            
            
        );

        // Verifica si se han enviado productos desde index.php
        if(isset($_GET['productos'])) {
            $productosSeleccionados = explode(',', $_GET['productos']);

            // Crea una tabla para mostrar las características
            echo "<table>";
            echo "<tr><th>Características</th>";

            // Incluye los detalles de cada producto
            foreach ($productosSeleccionados as $productoId) {
                echo "<th>$productoId</th>";
            }
            echo "</tr>";

            // Muestra las características para cada producto
            echo "<tr><td>Imagen</td>";
            foreach ($productosSeleccionados as $productoId) {
                // Verifica si el producto está en el array de características
                if (array_key_exists($productoId, $caracteristicas)) {
                    // Muestra la imagen del producto
                    echo "<td><img src='" . $caracteristicas[$productoId]['imagen'] . "' alt='Imagen $productoId'></td>";
                } else {
                    // Mensaje de error si no se encuentran las características del producto
                    echo "<td colspan='4'>Características no encontradas para este producto.</td>";
                }
            }
            echo "</tr>";

            // Muestra las características de cada producto
            foreach (array('Precio', 'Resistencia A' ,'Opciones De Conectividad', 'Duracion De La Bateria', 
             'Conexion', 'Color', 'Longitud Del Cable cm',) as $caracteristica) {
                echo "<tr><td>$caracteristica</td>";
                foreach ($productosSeleccionados as $productoId) {
                    // Verifica si el producto está en el array de características
                    if (array_key_exists($productoId, $caracteristicas)) {
                        // Muestra las características del producto
                        echo "<td>" . $caracteristicas[$productoId][$caracteristica] . "</td>";
                    } else {
                        // Mensaje de error si no se encuentran las características del producto
                        echo "<td colspan='4'>Características no encontradas para este producto.</td>";
                    }
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No se han seleccionado productos para comparar.</p>";
        }
    ?>
</section>
</main>
</body>
</html>