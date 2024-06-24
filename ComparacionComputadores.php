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
                                     GROUP_CONCAT(i.valor    ORDER BY i.idinfo SEPARATOR ', ') AS caracteristicas
                                     FROM productos p 
                                     INNER JOIN infoproductos i ON p.codProd = i.codProd 
                                     WHERE p.codProd IN (" . implode(',', array_fill(0, count($ids), '?')) . ") AND p.codigoCat = 3
                                     GROUP BY p.codProd");
                $sql->execute($ids);
                $productos = $sql->fetchAll(PDO::FETCH_ASSOC);

                // Definir el mapeo de valores específicos en el orden deseado
                $valoresEspecificos = [
                    0 => 'Resolucion Camara Web',
                    1 => 'No. Puertos HDMI',
                    2 => 'No. Puertos LAN Ethernet',
                    3 => 'No. Puertos USB',
                    4 => 'No. Salidas de Audio',
                    5 => 'Tipos de Puertos',
                    6 => 'Nivel de uso',
                    7 => 'Caracteristicas Especiales',
                    8 => 'Resolucion Pantalla',
                    9 => 'Tamaño Pantalla',
                    10 => 'Memoria RAM',
                    11 => 'Tipo de Discos que Incluye',
                    12 => 'Capacidad de Disco',
                    13 => 'Marca del procesador',
                    14 => 'Procesador',
                    15 => 'Modelo Procesador',
                    16 => 'Marca Tarjeta de Video/Grafica',
                    17 => 'version sistema operativo',
                    18 => 'Tamaño pantalla',
                    19 => 'Idioma sistema operativo',
                    20 => 'Nucleos del Procesador',
                    21 => 'Velocidad del Procesador	',
                    22 => 'Fuentes de Alimentacion de Energia',
                    23 => 'Color',
               
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