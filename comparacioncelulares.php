<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Comparación</title>
    <link rel="stylesheet" href="css/styleCompara.css">
</head>
<body>
    <main class="table">
        <section class="table_head">
            <h1>Resultados de Comparación <img src="img/balanza.gif" alt=""></h1>
        </section>
        <section class="table_body">
            <?php
            require 'config/config.php';
            require 'config/conexion.php';

            $db = new Database();
            $con = $db->conectar();

            if (isset($_GET['ids'])) {
                $ids = explode(',', $_GET['ids']);

                // Consulta para obtener la información de los productos seleccionados
                $sql = $con->prepare("SELECT p.codProd, p.nomProd, p.precio, p.imagen, p.stockProd, 
                                     GROUP_CONCAT(i.valor  SEPARATOR ', ') AS caracteristicas
                                     FROM productos p 
                                     INNER JOIN infoproductos i ON p.codProd = i.codProd 
                                     WHERE p.codProd IN (" . implode(',', array_fill(0, count($ids), '?')) . ") AND p.codigoCat = 1
                                     GROUP BY p.codProd");
                $sql->execute($ids);
                $productos = $sql->fetchAll(PDO::FETCH_ASSOC);

                // Definir el mapeo de valores específicos en el orden deseado
                $valoresEspecificos = [
                    0 => 'Red Transmisión de Datos',
                    1 => 'Dual SIM',
                    2 => 'Tipos de puertos',
                    3 => 'Resolución de cámara frontal',
                    4 => 'Cantidad de cámaras posteriores',
                    5 => 'Resolución de cámara posterior',
                    6 => 'Resolución otras cámaras posteriores',
                    7 => 'Flash frontal',
                    8 => 'Flash posterior',
                    9 => 'Memoria interna',
                    10 => 'Memoria RAM',
                    11 => 'Marca procesador',
                    12 => 'Sistema operativo',
                    13 => 'Versión del sistema operativo',
                    14 => 'Núcleos del procesador',
                    15 => 'Velocidad del procesador',
                    16 => 'Tipo de pantalla',
                    17 => 'Resolución pantalla',
                    18 => 'Tamaño pantalla',
                    19 => 'Capacidad batería',
                    20 => 'Resistencia sobre',
                    21 => 'Opciones Conectividad',
                    22 => 'Extra',
                    23 => 'Características especiales',
                    24 => 'Fuentes de alimentación de energía',
                    25 => 'Color',
                ];

                if (count($productos) > 0) {
                    // Mostrar los productos en una tabla con el diseño específico
                    echo "<table>";
                    echo "<tr><th>Producto</th>";

                    // Encabezados de columna para cada producto
                    foreach ($productos as $producto) {
                        echo "<th>" . htmlspecialchars($producto['nomProd']) . "</th>";
                    }
                    echo "</tr>";

                    // Fila para la imagen de cada producto
                    echo "<tr><td>Imagen</td>";
                    foreach ($productos as $producto) {
                        echo '<td><img src="imagenes/productos/' . htmlspecialchars($producto['imagen']) . '" alt="' . htmlspecialchars($producto['nomProd']) . '" width="200"></td>';
                    }
                    echo "</tr>";

                    // Fila para el precio de cada producto
                    echo "<tr><td>Precio</td>";
                    foreach ($productos as $producto) {
                        echo "<td>$" . htmlspecialchars($producto['precio']) . "</td>";
                    }
                    echo "</tr>";

                    // Filas para las características de cada producto
                    $caracteristicasPorProducto = [];
                    foreach ($productos as $producto) {
                        $caracteristicas = explode(', ', $producto['caracteristicas']);
                        $caracteristicasPorProducto[$producto['codProd']] = $caracteristicas;
                    }

                    foreach ($valoresEspecificos as $indice => $nombreCaracteristica) {
                        echo "<tr><td>" . $nombreCaracteristica . "</td>";
                        foreach ($productos as $producto) {
                            // Mapea el índice correcto de las características del producto
                            $valor = 'No disponible';
                            if (isset($caracteristicasPorProducto[$producto['codProd']][$indice])) {
                                $valor = $caracteristicasPorProducto[$producto['codProd']][$indice];
                            }
                            echo "<td>" . htmlspecialchars($valor) . "</td>";
                        }
                        echo "</tr>";
                    }

                    echo "</table>";
                } else {
                    echo 'No se encontraron productos con los IDs proporcionados.';
                }
            } else {
                echo 'Error: No se recibieron los IDs de los productos para comparar';
            }
            ?>
        </section>
    </main>
</body>
</html>