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
            'Tablet Samsung A8' => array(
                'Precio' => '$799.900',
                'Memoria Interna' => '128',
                'Marca Del Procesador' => 'Unisoc',
                'Memoria Ram' => '4GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2GHz',
                'Tipos De Puertos' => 'Tipo C,<br> Micro SD',
                'Resolucion De Camara Frontal' => '5Mpx',
                'Resolucion De La Camara Posterior' => '8Mpx',
                'Duracion De La Bateria' => '12 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Pantalla' => '1920x1200',
                'Tamaño De Pantalla' => '10.5  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Gris',
                'Extra' => 'Incluye Cable y Adaptador de Carga',
                'imagen' => 'imagenes/productos/tabletsamsungA8.png'// Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Tablet TCL TAB 8' => array(
                'Precio' => '$399.900',
                'Memoria Interna' => '32GB',
                'Marca Del Procesador' => 'MediaTek ',
                'Memoria Ram' => '2GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '4',
                'Velocidad Del Procesador' => '2.0GHz ',
                'Tipos De Puertos' => 'Entrada Tarjeta Micro SD <br>Puerto USB Tipo C  <br>Salida de Audífonos',
                'Resolucion De Camara Frontal' => '2Mpx',
                'Resolucion De La Camara Posterior' => '5Mpx',
                'Duracion De La Bateria' => '48 Horas Aprx',
                'Opciones De Conectividad' => 'HD (1280x800) ',
                'Resolucion De Pantalla' => 'HD (1280x800) ',
                'Tamaño De Pantalla' => '8  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Negro',
                'Extra' => 'Cargador tipo C y Clable tipo C. ',
                'imagen' => 'imagenes/productos/Tablet TCL 8_ Pulgadas TAB.png'
            ),
            'Tablet LENOVO M8' => array(
                'Precio' => '$579.000',
                'Memoria Interna' => '32GB',
                'Marca Del Procesador' => 'MediaTek A22 ',
                'Memoria Ram' => '2 GB ',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 10',
                'Nucleos Del Procesador' => '4',
                'Velocidad Del Procesador' => '2,0 GHz ',
                'Tipos De Puertos' => 'Entrada Tarjeta Micro SD <br>Salida de Audífonos ',
                'Resolucion De Camara Frontal' => '2Mpx',
                'Resolucion De La Camara Posterior' => '5Mpx',
                'Duracion De La Bateria' => '12 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '1280 x 800 ',
                'Tamaño De Pantalla' => '8  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Gris',
                'Extra' => 'Incluye Cable y Adaptador de Carga',
                'imagen' => 'imagenes/productos/Tablet LENOVO 8 Pulgadas M8 2gen LTE Color Gris.png'
            ),
            'Tablet LENOVO M10 Plus' => array(
                'Precio' => '$1.299.000',
                'Memoria Interna' => '128GB',
                'Marca Del Procesador' => 'MediaTek Helio G80 ',
                'Memoria Ram' => '4GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 10',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2,0 GHz',
                'Tipos De Puertos' => 'Puerto USB Tipo C <br>Salida de Audífonos ',
                'Resolucion De Camara Frontal' => '8Mpx',
                'Resolucion De La Camara Posterior' => '8Mpx',
                'Duracion De La Bateria' => '12 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '2K (2000x1200) ',
                'Tamaño De Pantalla' => '10  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Gris',
                'Extra' => 'Incluye Lapiz Precision 2 y Folio Case ',
                'imagen' => 'imagenes/productos/Tablet LENOVO 10 Pulgadas M10 Plus Wifi Color Gris.png'
            ),
            'Tablet SAMSUNG S7Fe' => array(
                'Precio' => '$3.199.900',
                'Memoria Interna' => '128GB',
                'Marca Del Procesador' => 'Snap Dragon',
                'Memoria Ram' => '6GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2.4GHz',
                'Tipos De Puertos' => 'Entrada Tarjeta Micro SD  <br>Puerto USB Tipo C  <br>Salida de Audífonos  <br>Salida de Parlantes',
                'Resolucion De Camara Frontal' => '5Mpx',
                'Resolucion De La Camara Posterior' => '8Mpx',
                'Duracion De La Bateria' => '13 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '2560 x 1600 (WQXGA) ',
                'Tamaño De Pantalla' => '12.4  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Plateado',
                'Extra' => 'Adaptador y cable + Mouse BT ',
                'imagen' => 'imagenes/productos/Tablet SAMSUNG 12.4 Pulgadas S7Fe Wifi Color Plata.png'
            ),
            'Tablet SAMSUNG S6' => array(
                'Precio' => '$1.999.900',
                'Memoria Interna' => '64GB',
                'Marca Del Procesador' => 'Qualcomm ',
                'Memoria Ram' => '4GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2.3GHz',
                'Tipos De Puertos' => 'Entrada Tarjeta SD <br> Salida de Audífonos',
                'Resolucion De Camara Frontal' => '5Mpx',
                'Resolucion De La Camara Posterior' => '8Mpx',
                'Duracion De La Bateria' => '14 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Pantalla' => '2000x1200 (WUXGA+) ',
                'Tamaño De Pantalla' => '10.3  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Azul ',
                'Extra' => 'Cover,Spen,Cable de carga',
                'imagen' => 'imagenes/productos/Tablet SAMSUNG 10.3 pulgadas S6 Wifi Color Azul.png'
            ),
            'iPad Pro 6ta Gen' => array(
                'Precio' => '$13.149.000',
                'Memoria Interna' => '256 GB',
                'Marca Del Procesador' => 'Apple M2',
                'Memoria Ram' => '16GB',
                'Sistema Operativo' => '16Mpx',
                'Version Del Sistema Operativo' => 'iPad OS',
                'Nucleos Del Procesador' => 'iPad OS 16',
                'Velocidad Del Procesador' => '8',
                'Tipos De Puertos' => 'Puerto USB Tipo C <br>Salida de Audífonos',
                'Resolucion De Camara Frontal' => '12Mpx',
                'Resolucion De La Camara Posterior' => '12Mpx',
                'Duracion De La Bateria' => '12 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '2732 x 2048 a 264 pixeles',
                'Tamaño De Pantalla' => '12.9 Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Gris',
                'Extra' => 'Cable de carga USB-C (1 m) <br> Adaptador de corriente USB-C de 20 W ',
                'imagen' => 'imagenes/productos/iPad Pro 12.9 pulgadas 2TB 6ta Gen Wifi Gris.png'
            ),
            'Tablet SAMSUNG Galaxy S8 Ultra' => array(
                'Precio' => '$6.299.900',
                'Memoria Interna' => '128GB',
                'Marca Del Procesador' => 'Qualcomm ',
                'Memoria Ram' => '8GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2.99 GHz',
                'Tipos De Puertos' => 'Entrada Tarjeta Micro SD <br> Puerto USB Tipo C <br>Salida de Audífonos <br>Salida de Parlantes ',
                'Resolucion De Camara Frontal' => '12Mpx',
                'Resolucion De La Camara Posterior' => '13Mpx',
                'Duracion De La Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '2960 x 1848 (WQXGA+) ',
                'Tamaño De Pantalla' => '14.6  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Gris',
                'Extra' => 'Cover con teclado, Spen',
                'imagen' => 'imagenes/productos/Tablet SAMSUNG Galaxy 14.6 Pulgadas S8 Ultra Wifi 5G color Gris.png'
            ),
            'Tablet SAMSUNG Galaxy S8 Plus' => array(
                'Precio' => '$5.299.900',
                'Memoria Interna' => '128GB',
                'Marca Del Procesador' => 'Qualcomm ',
                'Memoria Ram' => '8GB',
                'Sistema Operativo' => 'Android',
                'Version Del Sistema Operativo' => 'Android 11',
                'Nucleos Del Procesador' => '8',
                'Velocidad Del Procesador' => '2.99 GHz',
                'Tipos De Puertos' => 'Entrada Tarjeta Micro SD <br>Puerto USB Tipo C  <br>Salida de Audífonos  <br>Salida de Parlantes',
                'Resolucion De Camara Frontal' => '12Mpx',
                'Resolucion De La Camara Posterior' => '13Mpx',
                'Duracion De La Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, Wifi',
                'Resolucion De Pantalla' => '2800 x 1752 (WQXGA+)',
                'Tamaño De Pantalla' => '12.4  Pulgadas',
                'Fuentes De Alimentacion De Energia' => 'Batería Recargable Interna',
                'Color' => 'Negro ',
                'Extra' => 'Cover con teclado, Spen',
                'imagen' => 'imagenes/productos/Tablet SAMSUNG Galaxy 12.4 Pulgadas S8+ Wifi 5G color Negro.png'
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
            foreach (array('Precio', 'Memoria Interna' , 'Marca Del Procesador',  'Memoria Ram',  'Sistema Operativo',  'Version Del Sistema Operativo',  'Nucleos Del Procesador',
            'Velocidad Del Procesador','Tipos De Puertos', 'Resolucion De Camara Frontal',  'Resolucion De La Camara Posterior',  'Duracion De La Bateria', 'Opciones De Conectividad',
             'Resolucion De Pantalla',  'Tamaño De Pantalla',  'Fuentes De Alimentacion De Energia', 'Color', 'Extra',) as $caracteristica) {
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



                'Precio' => '$399.900',
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