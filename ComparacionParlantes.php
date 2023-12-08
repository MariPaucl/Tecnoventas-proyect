<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Comparación</title>
    <style>
        body {
            font-family: "Source Sans Pro SemiBold", cursive, sans-serif;

          
            background: -webkit-linear-gradient(to right, hsla(0, 0%, 42%, 0.541), hsla(0, 0%, 42%, 0.541)), url();
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, hsla(0, 0%, 42%, 0.541), hsla(0, 0%, 42%, 0.541)), url();
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
            

    h1 {
        color: #6D00B4; /* Cambia el color del texto a blanco */

    }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #B7B7B7;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid aqua; /* Cambia el color del borde de la tabla */
        }

        th, td {
            /* Cambia el color del borde de la cuadrícula a morado */
            padding: 8px;
            text-align: left;
            border: 2px solid purple; /* Cambia el color del borde de las celdas */
        }

        th {
            background-color: #E1E1E1;
        }

        img {
            max-width: 100px; /* Ajusta el ancho máximo de la imagen según tus necesidades */
            height: auto;
        }
    </style>
</head>
<body>

    <h1>Resultados de Comparación</h1>

    <?php
        // Definir un array asociativo con las características de los productos (incluyendo URLs de imágenes)
        $caracteristicas = array(
            'Parlante Sonos Era 300' => array(
                'Precio' => '$590.000',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Integrado Asistente de Voz',
                'Portabilidad' => 'N/A',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Duracion De la Bateria' => 'NA',
                'Rango Bluetooth' => '30 Metros',
                'Opciones De Conectividad' => 'Bluetooth y Wifi',
                'Conexion' => 'Alambrica',
                'Ancho/Frente de la Unidad Principal' => '26',
                'Alto de la Ud Principal' => '16',
                'Fondo de la Unidad Principal' => '18.5',
                'Extra' => 'N/A',
                'imagen' => 'imagenes/productos/parlanteSonosEra300.png'// Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Parlante BOSE SoundLink Flex' => array(
                'Precio' => '$599.900',
                'Resistencia A' => 'Resistente al Agua y el Polvo (IP 67)',
                'Caracteristicas Especiales' => 'Apto para Llamadas en Altavoz ',
                'Portabilidad' => 'Si es Portable',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Duracion De la Bateria' => '12  Horas Aproximadas',
                'Rango Bluetooth' => '10 Metros',
                'Opciones De Conectividad' => 'Bluetooth',
                'Conexion' => 'Inalámbrica',
                'Ancho/Frente de la Unidad Principal' => '9.04 cm',
                'Alto de la Ud Principal' => '20.14 cm',
                'Fondo de la Unidad Principal' => '5.23  cm',
                'Extra' => 'Cable USB-C',
                'imagen' => 'imagenes/productos/Parlante BOSE SoundLink Flex.png'
            ),
            'Parlante JBL PARTYBOX' => array(
            'Precio' => '$1.199.900',
                'Resistencia A' => 'Resistente a Salpicaduras (IPX4)',
                'Caracteristicas Especiales' => 'Tiene Luces LED',
                'Portabilidad' => 'Si es Portable',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna, Energía Eléctrica  ',
                'Color' => 'Negro',
                'Duracion De la Bateria' => '6  Horas Aproximadas',
                'Rango Bluetooth' => '10 Metros',
                'Opciones De Conectividad' => 'Bluetooth, Entradas de guitarra ',
                'Conexion' => 'Inalámbrica',
                'Ancho/Frente de la Unidad Principal' => '32.6 cm',
                'Alto de la Ud Principal' => '47.2 cm',
                'Fondo de la Unidad Principal' => 'N/A',
                'Extra' => 'N/A',
                'imagen' => 'imagenes/productos/Parlante JBL PARTYBOX.png'
            ),
            'KALLEY K-SPK400' => array(
                'Precio' => '$1.699.900',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Tiene Función Karaoke Tiene Luces LED ',
                'Portabilidad' => 'N/A',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Duracion De la Bateria' => 'N/A',
                'Rango Bluetooth' => '10 Metros',
                'Opciones De Conectividad' => 'Bluetooth',
                'Conexion' => 'Alambrica',
                'Ancho/Frente de la Unidad Principal' => '45 cm',
                'Alto de la Ud Principal' => '110.5 cm',
                'Fondo de la Unidad Principal' => '35.5  cm',
                'Extra' => 'Micrófono y control remoto',
                'imagen' => 'imagenes/productos/Kalley.png'
            ),
            'Parlante SONOS ERA 100 Blanco' => array(
                'Precio' => '$1.399.900',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Integrado Asistente de Voz',
                'Portabilidad' => 'N/A',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Blanco',
                'Duracion De la Bateria' => 'N/A',
                'Rango Bluetooth' => '30 Metros',
                'Opciones De Conectividad' => 'Bluetooth y Wifi',
                'Conexion' => 'Alambrica',
                'Ancho/Frente de la Unidad Principal' => '12 cm',
                'Alto de la Ud Principal' => '18.2  cm',
                'Fondo de la Unidad Principal' => '13 cm',
                'Extra' => 'N/A ',
                'imagen' => 'imagenes/productos/Parlante SONOS ERA 100 Blanco.png'
            ),
            'Parlante BOSE S1 PRO' => array(
                'Precio' => '$3.599.900',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Tiene Función Karaoke ',
                'Portabilidad' => 'Si es Portable ',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna, Energía Eléctrica ',
                'Color' => 'Negro',
                'Duracion De la Bateria' => '11  Horas Aproximadas',
                'Rango Bluetooth' => '9 Metros',
                'Opciones De Conectividad' => 'Bluetooth y Wifi',
                'Conexion' => 'Inalámbrica ',
                'Ancho/Frente de la Unidad Principal' => '23.8 cm',
                'Alto de la Ud Principal' => '33.2 cm',
                'Fondo de la Unidad Principal' => '27.9  cm',
                'Extra' => 'Cable de alimentación de CA, Guía de inicio rápido ',
                'imagen' => 'imagenes/productos/Parlante BOSE S1 PRO+.png'
            ),
            'Parlante KALLEY K-SPK50BL2' => array(
                'Precio' => '$394.000',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Tiene Luces LED ',
                'Portabilidad' => 'Si es Portable ',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna ',
                'Color' => 'Negro',
                'Duracion De la Bateria' => '4  Horas Aproximadas',
                'Rango Bluetooth' => '10 Bluetooth',
                'Opciones De Conectividad' => 'Bluetooth cm',
                'Conexion' => 'Inalámbrica cm',
                'Ancho/Frente de la Unidad Principal' => '24 cm',
                'Alto de la Ud Principal' => '39.5 cm',
                'Fondo de la Unidad Principal' => '19 cm',
                'Extra' => 'Micrófono y control remoto ',
                'imagen' => 'imagenes/productos/Parlante KALLEY K-SPK50BL2.png'
            ),
            'Parlante KALLEY K-SPK30BL2' => array(
                'Precio' => '$399.900',
                'Resistencia A' => 'N/A',
                'Caracteristicas Especiales' => 'Tiene Luces LED ',
                'Portabilidad' => 'Si es Portable ',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna ',
                'Color' => 'Negro',
                'Duracion De la Bateria' => 'NA',
                'Rango Bluetooth' => '10  Metros',
                'Opciones De Conectividad' => 'Bluetooth ',
                'Conexion' => 'Inalámbrica',
                'Ancho/Frente de la Unidad Principal' => '25.2 cm',
                'Alto de la Ud Principal' => '40 cm',
                'Fondo de la Unidad Principal' => '20.2 cm',
                'Extra' => 'Micrófono y control remoto ',
                'imagen' => 'imagenes/productos/Parlante KALLEY K-SPK30BL2.png'
            ),
            'Parlante LG XBOOM GO XG7QBK' => array(
                'Precio' => '$549.900',
                'Resistencia A' => 'Resistente al Agua y el Polvo (IP 67) ',
                'Caracteristicas Especiales' => 'Integrado Asistente de Voz',
                'Portabilidad' => 'Si es Portable ',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna ',
                'Color' => 'Negro',
                'Duracion De la Bateria' => '24  Horas Aproximadas',
                'Rango Bluetooth' => '10 Metros',
                'Opciones De Conectividad' => 'Bluetooth ',
                'Conexion' => 'Inalámbrica',
                'Ancho/Frente de la Unidad Principal' => '32 cm',
                'Alto de la Ud Principal' => '14.3 cm',
                'Fondo de la Unidad Principal' => '14.5 cm',
                'Extra' => 'N/A',
                'imagen' => 'imagenes/productos/Parlante LG XBOOM GO XG7QBK.png'
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
            foreach (array('Precio', 'Resistencia A' , 'Caracteristicas Especiales',  'Portabilidad',  'Fuentes De Alimentacion De Energia',  'Color',  
            'Duracion De la Bateria','Rango Bluetooth','Opciones De Conectividad',  'Conexion', 
             'Ancho/Frente de la Unidad Principal', 'Alto de la Ud Principal','Fondo de la Unidad Principal',  'Extra',) as $caracteristica) {
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

</body>
</html>