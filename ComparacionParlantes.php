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
                                     GROUP_CONCAT(i.valor ORDER BY i.idinfo SEPARATOR ', ') AS caracteristicas
                                     FROM productos p 
                                     INNER JOIN infoproductos i ON p.codProd = i.codProd 
                                     WHERE p.codProd IN (" . implode(',', array_fill(0, count($ids), '?')) . ") AND p.codigoCat = 6
                                     GROUP BY p.codProd");
                $sql->execute($ids);
                $productos = $sql->fetchAll(PDO::FETCH_ASSOC);

                // Definir el mapeo de valores específicos en el orden deseado
                $valoresEspecificos = [
                    0 => 'Resistencia a',
                    1 => 'Caracteristicas Especiales',
                    2 => 'Portabilidad',
                    3 => 'Fuentes de Alimentacion de Energia',
                    4 => 'Color',
                    5 => 'Rango Bluetooth',
                    6 => 'Opciones Conectividad',
                    7 => 'Conexion',
                    8 => 'Flash posterior',
                    9 => 'Ancho en Cm',
                    10 => 'Alto en Cm',
                    11 => 'Fondo en Cm',
                    12 => 'Extra',
             
                
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