<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regProd.css">
    <title>Registro Productos</title>
</head>
<body>
    <div class="form-container">
        <h2>Registro Productos</h2>
        <form method="post">
            <div class="form-group">
                <input type="text" name="nomProd" id="nomProd" placeholder="Nombre Producto">
                <input type="text" name="marca" id="marca" placeholder="Marca">
                <input type="number" name="precio" id="precio" placeholder="Precio">
                <div class="image">
                    <p class="texto">Agregar Imagen</p>
                <input type="file" name="imagen" id="image-file">
                </div>
                <select name="estado" id="estado">
                    <option value="Disponible">
                        Disponible
                    </option>
                    <option value="Agotado">
                        Agotado
                    </option>
                </select>
            </div>
                <input type="submit" name="registrar" value="Guardar" class="btn">
        </form>
    </div>


    <?php
    include("registrar.php");
    ?>
</body>
</html>