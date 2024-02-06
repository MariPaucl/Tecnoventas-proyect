<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Comparación</title>
    <link rel="website icon" type="png" href="imagenes/Tecnoventas.png">

    <style>
        body {
            font-family: "Source Sans Pro SemiBold", cursive, sans-serif;

            background: -webkit-linear-gradient(to right, hsla(0, 0%, 42%, 0.541), hsla(0, 0%, 42%, 0.541)), url();
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, hsla(0, 0%, 42%, 0.541), hsla(0, 0%, 42%, 0.541)), url();
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

    h1 {
        color: #6D00B4;
        text-transform: uppercase;
        font-family: sans-serif;
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
            'Computador All In One Lenovo AIO 3' => array(
                'Precio' => '$1.999.000',
                'Resolucion Camara Web' => '5.0 MP',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '4 Puertos',
                'N° De Salidas De Audio' => 'N/A',
                'Tipos De Puertos' => 'Puerto HDMI <br> Puerto LAN/Ethernet <br> Puerto USB <br>Puerto USB 2.0',
                'Nivel De Uso' => 'Medio',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '27  Pulgadas',
                'Memoria Ram' => '16GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '1TB',
                'Marca Del Procesador' => 'AMD',
                'Procesador' => 'AMD R5',
                'Modelo Del Procesador' => '7530U',
                'Marca Tarjeta De Video/Grafica' => 'N/A',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '6',
                'Velocidad Del Procesador' => '2.0GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Opciones De Conectividad' => 'Bluetooth , WiFi',
                'imagen' => 'imagenes/productos/AllInOneLenovoAio3.png' // Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Computador All in One HP dd2006la' => array(
                'Precio' => '$1.3990.00',
                'Resolucion Camara Web' => '720p HD',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '2 Puertos',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Entrada Tarjeta SD <br>Puerto HDMI <br>Puerto LAN/Ethernet <br>Puerto USB <br>Salida de Audífonos',
                'Nivel De Uso' => 'Medio',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '21.5  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '256GB',
                'Marca Del Procesador' => 'Intel',
                'Procesador' => 'Intel Celeron ',
                'Modelo Del Procesador' => 'Intel Celeron J4025 ',
                'Marca Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '2',
                'Velocidad Del Procesador' => '2.00 GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Opciones De Conectividad' => 'Bluetooth, WiFi ',
                'imagen' => 'imagenes/productos/all(6).png'
            ),
            'Computador All in One HP dd2011la' => array(
                'Precio' => '$1.549.000',
                'Resolucion Camara Web' => '720p HD',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '2 Puertos',
                'N° De Salidas De Audio' => 'NA',
                'Tipos De Puertos' => '<br>Entrada Tarjeta SD  <br>Puerto HDMI  <br>Puerto LAN/Ethernet  <br>Puerto USB  <br>Salida de Audífonos ',
                'Nivel De Uso' => 'Medio',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '21.5  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '256GB',
                'Marca Del Procesador' => 'Intel',
                'Procesador' => 'Intel Pentium',
                'Modelo Del Procesador' => 'Silver J5040 ',
                'Marca Tarjeta De Video/Grafica' => 'N/A',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '4',
                'Velocidad Del Procesador' => '2.00 GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Blanco Nieve ',
                'Opciones De Conectividad' => 'Bluetooth ,WiFi ',
                'imagen' => 'imagenes/productos/all(4).png'
            ),
            'Computador All In One LENOVO AIO 3 White' => array(
                'Precio' => '$2.999.000',
                'Resolucion Camara Web' => '5.0MP + IR',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '1 Puerto',
                'N° De Salidas De Audio' => 'N/A',
                'Tipos De Puertos' => '<br>Puerto HDMI  <br>Puerto LAN/Ethernet  <br>Puerto USB  <br>Salida de Audífonos ',
                'Nivel De Uso' => 'Avanzado',
                'Caracteristicas Especiales' => 'Reconocimiento Facial ',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '23.8  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512GB',
                'Marca Del Procesador' => 'Intel ',
                'Procesador' => 'Intel Core i5',
                'Modelo Del Procesador' => '12450H ',
                'Marca Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Marca De Tarjeta De Video/Grafica' => '8',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '4.40 GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Blanco',
                'Opciones De Conectividad' => 'Bluetooth Conexión Con Cable ,WiFi ',
                'imagen' => 'imagenes/productos/all(8).png'
            ),
            'Computador All in One ASUS ' => array(
                'Precio' => '$2.899.000',
                'Resolucion Camara Web' => 'HD',
                'N° De Puertos HDMI' => '2 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '5 Puertos',
                'N° De Salidas De Audio' => '3 Puertos',
                'Tipos De Puertos' => 'Puerto HDMI  <br>Puerto LAN/Ethernet  <br>Puerto USB 2.0  <br>Puerto USB 3.2  <br>Puerto USB Tipo C  <br>Salida de Audífonos',
                'Nivel De Uso' => 'Avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '23.8  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512GB',
                'Marca Del Procesador' => 'INTEL ',
                'Procesador' => 'Intel Core I5 ',
                'Modelo Del Procesador' => 'Ci5 1235U ',
                'Marca Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '10',
                'Velocidad Del Procesador' => '4.40 GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Blanco ',
                'Opciones De Conectividad' => 'Bluetooth, USB, WiFi ',
                'imagen' => 'imagenes/productos/ASUS.png'
            ),
            'Computador All in One HP PAVILION ca0000la' => array(
                'Precio' => '$2.899.000',
                'Resolucion Camara Web' => 'HD',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '3 Puerto',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI <br>Puerto LAN/Ethernet <br>Puerto USB <br>Puerto USB Tipo C <br>Salida de Audífonos ',
                'Nivel De Uso' => 'Medio',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '27  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512GB',
                'Marca Del Procesador' => 'AMD',
                'Procesador' => 'AMD R5',
                'Modelo Del Procesador' => 'AMD Ryzen™ 5 5500U',
                'Marca Tarjeta De Video/Grafica' => 'N/A',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '6',
                'Velocidad Del Procesador' => '4.0GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Blanco Nieve ',
                'Opciones De Conectividad' => 'Bluetooth, Conexión Con Cable ,WiFi ',
                'imagen' => 'imagenes/productos/Computador All in One HP PAVILION.png'
            ),
            'Computador All In One Lenovo' => array(
                'Precio' => '$4.349.000',
                'Resolucion Camara Web' => '5.0 MP',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '4 Puerto',
                'N° De Salidas De Audio' => 'N/A',
                'Tipos De Puertos' => 'Puerto HDMI <br>  Puerto LAN/Ethernet<br> Puerto USB <br> Puerto USB 2.0<br>Puerto HDMI  <br>Puerto LAN/Ethernet  <br>Puerto USB  <br>Puerto USB 2.0 ',
                'Nivel De Uso' => 'Avanzado ',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '27  Pulgadas',
                'Memoria Ram' => '16GB',
                'Tipo De Discos Que Inlcuye' => 'Hibrido TB + SSD ',
                'Capacidad De Disco' => 'HDD 1 TB + SSD 512 GB ',
                'Marca Del Procesador' => 'AMD',
                'Procesador' => 'AMD R7',
                'Modelo Del Procesador' => '7730U ',
                'Marca Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '4.5GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Opciones De Conectividad' => 'Bluetooth, Conexión Con Cable, WiFi ',
                'imagen' => 'imagenes/productos/IO 3 - AMD Ryzen 7.png'
            ),
            'iMac 24 Chip M3 Apple' => array(
                'Precio' => '$10.029.000',
                'Resolucion Camara Web' => '1080',
                'N° De Puertos HDMI' => 'N/A',
                'N° De Puetos LAN Ethernet' => '1 Puerto',
                'N° De Puertos USB' => '4 Puertos',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto LAN/Ethernet <br>Puerto USB Tipo C ',
                'Nivel De Uso' => 'Esencial ',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Reconocimiento de Voz',
                'Resolucion De Pantalla' => 'Retina ',
                'Tamaño De Pantalla' => '24  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512GB',
                'Marca Del Procesador' => 'Apple ',
                'Procesador' => 'Apple M3 ',
                'Modelo Del Procesador' => 'Apple M3 ',
                'Marca Tarjeta De Video/Grafica' => 'N/A',
                'Sistema Operativo' => 'MacOs ',
                'Version Del Sistema Operativo' => 'MacOs Sonoma ',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '100GB por segundo',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Negro',
                'Opciones De Conectividad' => 'Bluetooth, WiFi ',
                'imagen' => 'imagenes/productos/APPLE.png'
            ),
            'Computador All In One LENOVO Yoga AIO' => array(
                'Precio' => '$13.999.000',
                'Resolucion Camara Web' => '5.0MP + IR ',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puetos LAN Ethernet' => 'N/A',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI  <br>Puerto USB 3.2  <br>Puerto USB Tipo C  <br>Salida de Audífonos ',
                'Nivel De Uso' => 'Avanzado',
                'Caracteristicas Especiales' => 'Reconocimiento Facial ',
                'Resolucion De Pantalla' => '4K Ultra HD ',
                'Tamaño De Pantalla' => '31.5  Pulgadas',
                'Memoria Ram' => '32GB',
                'Tipo De Discos Que Inlcuye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '1TB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I9',
                'Modelo Del Procesador' => '13900H ',
                'Marca Tarjeta De Video/Grafica' => 'GeForce® RTX 4050 ',
                'Sistema Operativo' => 'Windows',
                'Version Del Sistema Operativo' => '11 Home, español',
                'Nucleos Del Procesador' => '14',
                'Velocidad Del Procesador' => '5.40 GHz',
                'Fuentes De Alimentacion De Energia' => 'Energía Eléctrica',
                'Color' => 'Gris tormenta ',
                'Opciones De Conectividad' => 'Bluetooth , WiFi',
                'imagen' => 'imagenes/productos/e LENOVO Yoga.png'
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
            foreach (array('Precio','Resolucion Camara Web', 'N° De Puertos HDMI', 'N° De Puetos LAN Ethernet' , 'N° De Puertos USB',  'N° De Salidas De Audio',  'Tipos De Puertos',  'Nivel De Uso' ,
            'Caracteristicas Especiales', 'Resolucion De Pantalla',  'Tamaño De Pantalla',  'Memoria Ram',  'Tipo De Discos Que Inlcuye',  'Capacidad De Disco',
            'Tamaño De Pantalla', 'Memoria Ram','Tipo De Discos Que Inlcuye', 'Capacidad De Disco', 'Marca Del Procesador', 
            'Marca Del Procesador', 'Procesador',  'Modelo Del Procesador',   'Marca Tarjeta De Video/Grafica', 
            'Sistema Operativo', 'Version Del Sistema Operativo',  'Nucleos Del Procesador', 'Velocidad Del Procesador',
               'Fuentes De Alimentacion De Energia',  'Color',  'Opciones De Conectividad',) as $caracteristica) {
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