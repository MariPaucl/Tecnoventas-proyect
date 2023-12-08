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
            'Celular Redmi 9T EUCarbon' => array(
                'Precio' => '$769.900',
                'Red de trasmision de datos' => '5G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '16Mpx',
                'Cantidad de camara posteriores' => '2',
                'Resolucion de camara posterior' => '32 Mpx',
                'Resolcion otras camaras posteriores' => '8Mpx + 2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '64GB',
                'Memoria ram' => '4GB',
                'marca procesador' => 'Qualcomm',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 13',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2,8GHz',
                'Tipo de pantalla' => '64GB',
                'Resolucion pantalla' => 'Amoled',
                'Tamaño pantalla' => 'FHD+',
                'Capacidad bateria' => '6.67 Pulgadas',
                'Resistencia sobre' => '5000 mAh',
                'Opciones de contectividad' => 'Agua y Polvo',
                'Extra' => 'Bluetooth y WiFi',
                'Caracteristicas especiales' => 'Cable de cargador y adapatador',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Negro',
                'imagen' => 'https://erp.chaomi.com.mx/uploads/7c1a31331-removebg-preview.png' // Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Samsung Galaxy A24' => array(
                'Precio' => '$205.0000',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '13Mpx',
                'Cantidad de camara posteriores' => '2',
                'Resolucion de camara posterior' => '50Mpx',
                'Resolcion otras camaras posteriores' => '5Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '4GB',
                'marca procesador' => 'Mediatek',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 13',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2.2GHz,2GHz',
                'Tipo de pantalla' => 'Super Amoled',
                'Resolucion pantalla' => 'FHD+',
                'Tamaño pantalla' => '6.6  Pulgadas',
                'Capacidad bateria' => '5000 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Negro',
                'imagen' => 'https://comprasmartphone.com/_next/image?url=https%3A%2F%2Fstorage.comprasmartphone.com%2Fsmartphones%2Fsamsung-galaxy-a12.png&w=256&q=75'
            ),
            'Moto G30 Dual SIM' => array(
                'Precio' => '$769.000',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'No',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '13Mpx',
                'Cantidad de camara posteriores' => '3',
                'Resolucion de camara posterior' => '64Mpx',
                'Resolcion otras camaras posteriores' => '8Mpx+2Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '4GB',
                'marca procesador' => 'Snapdragon 662',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 12',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2.2GHz',
                'Tipo de pantalla' => 'Super Amoled',
                'Resolucion pantalla' => 'Full HD',
                'Tamaño pantalla' => '6.6  Pulgadas',
                'Capacidad bateria' => '5000 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Adaptador carga ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Negro',
                'imagen' => 'imagenes/productos/motorolag30cel.png'
            ),
            'Celular Xiaomi Poco X3 PRO Phantom' => array(
                'Precio' => '$989.900',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'No',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '20 Mpx',
                'Cantidad de camara posteriores' => '3',
                'Resolucion de camara posterior' => '50Mpx',
                'Resolcion otras camaras posteriores' => '2Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '6GB',
                'marca procesador' => 'Snapdragon 860',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 11',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '96 GHz',
                'Tipo de pantalla' => 'IPS',
                'Resolucion pantalla' => 'FHD+',
                'Tamaño pantalla' => '6,67 Pulgadas',
                'Capacidad bateria' => '5160 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Phantom Black',
                 'imagen' => 'imagenes/productos/elular Xiaomi Poco X3 PRO Phantom.png'
               
            ),
            'Samsung Galaxy S20 FE Dual SIM' => array(
                'Precio' => '$2.055.000',
                'Red de trasmision de datos' => '5G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '32 Mpx',
                'Cantidad de camara posteriores' => '3',
                'Resolucion de camara posterior' => '12 Mpx',
                'Resolcion otras camaras posteriores' => '12Mpx+8Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '6GB',
                'marca procesador' => 'Samsung Exynos 990',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 10',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2.73 GHz',
                'Tipo de pantalla' => 'Super Amoled',
                'Resolucion pantalla' => 'FHD+',
                'Tamaño pantalla' => '6.5  Pulgadas',
                'Capacidad bateria' => '4500 mAh',
                'Resistencia sobre' => 'resistencia al agua y al polvo IP68',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Blanco',
                 'imagen' => 'https://storage.comprasmartphone.com/smartphones/samsung-galaxy-s20-fe.png'
            ),
            'Moto G20 Dual SIM' => array(
                'Precio' => '$649.999',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '13Mpx',
                'Cantidad de camara posteriores' => '4',
                'Resolucion de camara posterior' => '48Mpx',
                'Resolcion otras camaras posteriores' => '8Mpx+2Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '64GB',
                'Memoria ram' => '4GB',
                'marca procesador' => 'Unisoc T700',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 11',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '1,8GHz',
                'Tipo de pantalla' => 'IPS',
                'Resolucion pantalla' => 'FHD+',
                'Tamaño pantalla' => '6.5  Pulgadas',
                'Capacidad bateria' => '5000 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Verde Petróleo',
                 'imagen' => 'imagenes/productos/motorola g20.png'
            ),
            'Realme 6' => array(
                'Precio' => '$880.000',
                'Red de trasmision de datos' => '5G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '16Mpx',
                'Cantidad de camara posteriores' => '4',
                'Resolucion de camara posterior' => '64Mpx',
                'Resolcion otras camaras posteriores' => '8Mpx+2Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '8GB',
                'marca procesador' => 'MediaTek Helio G90T',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 11',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2.05 GHz',
                'Tipo de pantalla' => 'Super Amoled',
                'Resolucion pantalla' => 'IPS',
                'Tamaño pantalla' => '6.5  Pulgadas',
                'Capacidad bateria' => '4.300 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'zul Claro',
                'imagen' => 'https://cdn.shopify.com/s/files/1/0240/8470/9453/products/1.realme6_CometBlue_Front_RGB_1000x.png?v=1599749274'
            ),
            'Samsung Galaxy A32' => array(
                'Precio' => '$919.900',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'No',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '20Mpx',
                'Cantidad de camara posteriores' => '4',
                'Resolucion de camara posterior' => '64Mpx',
                'Resolcion otras camaras posteriores' => '8Mpx+5Mpx+5Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '6GB',
                'marca procesador' => 'Helio G80',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 10',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2 GHz',
                'Tipo de pantalla' => 'Amoled',
                'Resolucion pantalla' => 'FHD+',
                'Tamaño pantalla' => '6.4  Pulgadas',
                'Capacidad bateria' => '5000 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Negro',
                'imagen' => 'https://storage.comprasmartphone.com/smartphones/samsung-galaxy-a32.png'
            ),
            'Xiaomi Poco X3 Pro' => array(
                'Precio' => '<bgcolor="red">$1.139.900</>',
                'Red de trasmision de datos' => '4G',
                'Dual sim' => 'Si',
                'Tipos de puertos' => 'Tipo C',
                'Resolucion de camara frontal' => '20Mpx',
                'Cantidad de camara posteriores' => '4',
                'Resolucion de camara posterior' => '64Mpx',
                'Resolcion otras camaras posteriores' => '13Mpx+2Mpx+2Mpx',
                'Flash frontal' => 'No',
                'Flash posterior' => 'Si',
                'Memoria interna' => '128GB',
                'Memoria ram' => '6GB',
                'marca procesador' => 'Qualcomm Snapdragon 732G',
                'sistema operativo' => 'Android',
                'version del sistema operativo' => 'Android 10',
                'nucleos del procesador' => '8',
                'Velocidad del procesador' => '2.3 GHz',
                'Tipo de pantalla' => 'super Amoled',
                'Resolucion pantalla' => 'IPS',
                'Tamaño pantalla' => '6.67  Pulgadas',
                'Capacidad bateria' => '5.160 mAh',
                'Resistencia sobre' => 'NA',
                'Opciones de contectividad' => 'Bluetooth, USB y WiFi ',
                'Extra' => 'Incluye Cable USB, Pin Ejección ',
                'Caracteristicas especiales' => 'Lector de huella',
                'Fuentes de alimentacion de energia' => 'Bateria Recargable Interna',
                'Color' => 'Blanco Rosado',
                'imagen' => 'imagenes/productos/xiaomi poco pro.png'
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
                echo "<th>Celular $productoId</th>";
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
            foreach (array('Precio','Red de trasmision de datos', 'Dual sim', 'Tipos de puertos', 'Resolucion de camara frontal', 'Cantidad de camara posteriores', 'Resolucion de camara posterior',
            'Resolcion otras camaras posteriores', 'Flash frontal', 'Flash posterior', 'Memoria interna', 'Memoria ram', 'marca procesador',
            'sistema operativo', 'version del sistema operativo', 'nucleos del procesador', 'Velocidad del procesador', 'Tipo de pantalla', 'Resolucion pantalla',
            'Tamaño pantalla', 'Capacidad bateria', 'Resistencia sobre', 'Opciones de contectividad', 'Extra', 'Caracteristicas especiales', 'Fuentes de alimentacion de energia',
            'Color',) as $caracteristica) {
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