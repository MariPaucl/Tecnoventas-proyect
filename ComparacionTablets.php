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
                                     WHERE p.codProd IN (" . implode(',', array_fill(0, count($ids), '?')) . ") AND p.codigoCat = 4
                                     GROUP BY p.codProd");
                $sql->execute($ids);
                $productos = $sql->fetchAll(PDO::FETCH_ASSOC);

                // Definir el mapeo de valores específicos en el orden deseado
                $valoresEspecificos = [
       
                    0 => 'Memoria Interna',
                    1 => 'Marca Procesador',
                    2 => 'Memoria RAM',
                    3 => 'Sistema Operativo',
                    4 => 'Version Sistema Operativo',
                    5 => 'Nucleos del Procesador',
                    6 => 'Velocidad del Procesador',
                    7 => 'Tipos de Puertos',
                    8 => 'Resolucion Camara Frontal',
                    9 => 'Resolucion Camara Posterior',
                    10 => 'Duracion de la bateria',
                    12 => 'Opciones Conectividad',
                    13 => 'Resolucion Pantalla',
                    14 => 'Tamaño Pantalla',
                    15 => 'Fuentes de Alimentacion de Energia',
                    16 => 'Color',
                    17 => 'Extra',
                
                 
             
                ];

                // Agrupar características específicas bajo un solo encabezado
                $gruposDeCaracteristicas = [
                    'Opciones Conectividad' => [12, 11],
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

                    // Mostrar las características según el mapeo
                    foreach ($valoresEspecificos as $indice => $nombreCaracteristica) {
                        if (array_key_exists($nombreCaracteristica, $gruposDeCaracteristicas)) {
                            // Si la característica es un grupo
                            echo "<tr><td>" . $nombreCaracteristica . "</td>";
                            foreach ($productos as $producto) {
                                $valoresGrupo = [];
                                foreach ($gruposDeCaracteristicas[$nombreCaracteristica] as $indiceGrupo) {
                                    if (isset($caracteristicasPorProducto[$producto['codProd']][$indiceGrupo])) {
                                        $valoresGrupo[] = $caracteristicasPorProducto[$producto['codProd']][$indiceGrupo];
                                    } else {
                                        $valoresGrupo[] = 'No disponible';
                                    }
                                }
                                echo "<td>" . htmlspecialchars(implode(', ', $valoresGrupo)) . "</td>";
                            }
                            echo "</tr>";
                        } else {
                            // Si la característica es una sola
                            echo "<tr><td>" . $nombreCaracteristica . "</td>";
                            foreach ($productos as $producto) {
                                $valor = isset($caracteristicasPorProducto[$producto['codProd']][$indice]) ? $caracteristicasPorProducto[$producto['codProd']][$indice] : 'No disponible';
                                echo "<td>" . htmlspecialchars($valor) . "</td>";
                            }
                            echo "</tr>";
                        }
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
