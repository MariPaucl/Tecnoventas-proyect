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

<main class="table">
    <section class="table_head">
    <h1>Resultados de Comparación <img src="img/balanza.gif" alt=""></h1>
    </section>
    <section class="table_body">
    <?php
        // Definir un array asociativo con las características de los productos (incluyendo URLs de imágenes)
        $caracteristicas = array(
            'Portatil ASUS X415EA' => array(
                'Precio' => '$1.399.000',
                'Duracion Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => '1 Puerto',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Tarjeta Micro SD, Puerto HDMI, Puerto USB, <br> Puerto USB 2.0, Puerto USB Tipo C, Salida de Audífonos',
                'Nivel De Uso' => 'Medio',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '14  Pulgadas',
                'Memoria Ram' => '4GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '256 GB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I3',
                'Modelo Del Procesador' => 'i3 1115G4',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 10 Home',
                'Nucleos Del Procesador' => '2',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '3.0 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Gris',
                'imagen' => 'Productos_Cliente/Portatiles/img/asus.png' // Reemplaza 'url_imagen_producto1.jpg' con la URL real de la imagen
            ),
            'Portatil Acer A315' => array(
                'Precio' => '$1.299.000',
                'Duracion Bateria' => '9 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth,Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Puertos USB Tipo C' => 'N/A',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI, Puerto USB',
                'Nivel De Uso' => '	Esencial',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada',
                'Resolucion De Pantalla' => 'HD',
                'Tamaño De Pantalla' => '15.6 Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Duro (HDD)',
                'Capacidad De Disco' => '1TB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I3',
                'Modelo Del Procesador' => 'I3 1005G1',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 10 Home',
                'Nucleos Del Procesador' => '2',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '1.20 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Gris',
                'imagen' => 'imagenes/productos/acerA315.png'
            ),
            'Portátil LENOVO IdeaPad 1' => array(
                'Precio' => '$1.399.000',
                'Duracion Bateria' => '10 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => '1 Puerto',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI <br> Puerto USB <br>Puerto USB 2.0 <br>Puerto USB ',
                'Nivel De Uso' => 'Esencial',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella',
                'Resolucion De Pantalla' => 'HD',
                'Tamaño De Pantalla' => '14  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '256 GB',
                'Marca Del Procesador' => 'AMD',
                'Procesador' => 'AMD Athlon',
                'Modelo Del Procesador' => 'AMD Athlon Silver',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 Home',
                'Nucleos Del Procesador' => '2',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '2.4 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Gris Nube',
                'imagen' => 'Productos_Cliente/Portatiles/img/hp.png'
            ),
            'Portátil ACER T36F3' => array(
                'Precio' => '$1.999.000',
                'Duracion Bateria' => '10 Horas Aprxus',
                'Opciones De Conectividad' => 'bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI <br> Puerto USB <br> Puerto USB 3.2 <br> Puerto USB Tipo C <br>Salida de Audífonos<br> Salida de Parlantes',
                'Nivel De Uso' => 'avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella',
                'Resolucion De Pantalla' => 'HD',
                'Tamaño De Pantalla' => '15,6 Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512 GB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I3',
                'Modelo Del Procesador' => 'Intel Core i3 N305 ',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 Home',
                'Nucleos Del Procesador' => '8',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '3.80 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Azul',
                'imagen' => 'Productos_Cliente/Portatiles/img/acer.png'
            ),
            'Portátil ACER 544K' => array(
                'Precio' => '$1.999.000',
                'Duracion Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '3 Puertos',
                'N° De Puertos USB Tipo C' => 'N/A',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI 2.1 <br>Puerto LAN/Ethernet <br>Puerto USB 3.2 <br>Salida de Audífonos <br>Salida de Parlantes',
                'Nivel De Uso' => 'avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '15.6  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512 GB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I5 ',
                'Modelo Del Procesador' => 'Intel Core i5 1235U ',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 Home',
                'Nucleos Del Procesador' => '10',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '1,30 GHz ',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Plateado',
                'imagen' => 'Productos_Cliente/Portatiles/img/acer-i5.png'
            ),
            'Portátil HP Em0006la' => array(
                'Precio' => '$1.999.000',
                'Duracion Bateria' => '11 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '2 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => '1 Puerto',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Entrada Tarjeta SD <br>Puerto HDMI <br>Puerto USB <br>Puerto USB Tipo C <br>Salida de Audífonos',
                'Nivel De Uso' => 'avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '14  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512 GB',
                'Marca Del Procesador' => 'AMD',
                'Procesador' => 'MD R3',
                'Modelo Del Procesador' => 'AMD R3 7320U ',
                'Marca De Tarjeta De Video/Grafica' => 'NA',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 Home',
                'Nucleos Del Procesador' => '4',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '4,1 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Azul Claro',
                'imagen' => 'Productos_Cliente/Portatiles/img/hp ryzen.png'
            ),
            'Portátil Gamer LENOVO' => array(
                'Precio' => '$3.159.000',
                'Duracion Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '2 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => 'Puerto HDMI <br>Puerto LAN/Ethernet <br>Puerto USB <br>Puerto USB Tipo C <br>Salida de Audífonos',
                'Tipos De Puertos' => 'Avanzado',
                'Nivel De Uso' => 'Cámara WEB Integrada, Lector de Huella, Tarjeta de Video',
                'Caracteristicas Especiales' => 'Full HD',
                'Resolucion De Pantalla' => '1 Puerto',
                'Tamaño De Pantalla' => '15,6  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512 GB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I5',
                'Modelo Del Procesador' => 'Intel Core I5 11320H',
                'Marca De Tarjeta De Video/Grafica' => 'GeForce® GTX 1650',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 pro',
                'Nucleos Del Procesador' => '4',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '4,5 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Negro',
                'imagen' => 'Productos_Cliente/Portatiles/img/gamer-lenovo.png'
            ),
            'Portátil ASUS TUF Gaming' => array(
                'Precio' => '$3.149.000',
                'Duracion Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '1 Puerto',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI <br>Puerto LAN/Ethernet <br>Puerto USB <br>Puerto USB Tipo C <br>Salida de Audífonos',
                'Nivel De Uso' => 'Avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella, Tarjeta Grafica',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '15,6  Pulgadas',
                'Memoria Ram' => '8GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '512 GB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I5',
                'Modelo Del Procesador' => 'Intel Core i5 10300H',
                'Marca De Tarjeta De Video/Grafica' => 'GeForce® GTX 1650',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 Pro',
                'Nucleos Del Procesador' => '4',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '4,5 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Negro Hoguera',
                'imagen' => 'Productos_Cliente/Portatiles/img/TUF-GAMING.png'
            ),
            'Portátil Gamer ACER' => array(
                'Precio' => '$7.899.000',
                'Duracion Bateria' => '8 Horas Aprx',
                'Opciones De Conectividad' => 'Bluetooth, USB, Wifi',
                'Resolucion De Camara Web' => 'VGA (640x480)',
                'N° De Puertos HDMI' => '1 Puerto',
                'N° De Puertos USB' => '4 Puertos',
                'N° De Puertos USB Tipo C' => '1 Puerto',
                'N° De Puertos SD' => 'N/A',
                'N° De Salidas De Audio' => '1 Puerto',
                'Tipos De Puertos' => 'Puerto HDMI <br>Puerto LAN/Ethernet <br>Puerto USB <br>Puerto USB Tipo C <br>Salida de Audífonos',
                'Nivel De Uso' => 'Avanzado',
                'Caracteristicas Especiales' => 'Cámara WEB Integrada, Lector de Huella, Tarjeta Grafica',
                'Resolucion De Pantalla' => 'Full HD',
                'Tamaño De Pantalla' => '16  Pulgadas',
                'Memoria Ram' => '16GB',
                'Tipos De Discos Que Incluye' => 'Disco Estado Solido (SSD)',
                'Capacidad De Disco' => '1 TB',
                'Marca Del Procesador' => 'INTEL',
                'Procesador' => 'Intel Core I5',
                'Modelo Del Procesador' => 'Intel Core I5 13500H',
                'Marca De Tarjeta De Video/Grafica' => 'GeForce® RTX 4050',
                'Sistema Operativo' => 'Windows',
                'Version Del Sitema Operativo' => 'Windows 11 pro',
                'Nucleos Del Procesador' => '12',
                'N° De Puertos HDMI' => '1 Puerto',
                'Velocidad Del Procesador' => '4.70 GHz',
                'Fuentes De Alimentacion De Engergia' => 'Batería Recargable Interna, Energía Eléctrica',
                'Color' => 'Negro',
                'imagen' => 'Productos_Cliente/Portatiles/img/gamer-acer.png'
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
                echo "<th>Portatil $productoId</th>";
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
            foreach (array('Precio','Duracion Bateria', 'Opciones De Conectividad', 'Resolucion De Camara Web', 'N° De Puertos HDMI', 'N° De Puertos USB', 'N° De Puertos USB Tipo C', 'Procesador',
            'N° De Puertos SD', 'N° De Salidas De Audio', 'Tipos De Puertos', 'Nivel De Uso', 'Caracteristicas Especiales', 'Resolucion De Pantalla',
            'Tamaño De Pantalla', 'Memoria Ram',  'Tipos De Discos Que Incluye', 'Capacidad De Disco', 'Marca Del Procesador', 
            'Procesador', 'Modelo Del Procesador', 'Marca De Tarjeta De Video/Grafica',  'Sistema Operativo', 
            'Version Del Sitema Operativo',  'Nucleos Del Procesador', 'N° De Puertos HDMI', 'Velocidad Del Procesador',
              'Fuentes De Alimentacion De Engergia',  'Color',) as $caracteristica) {
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