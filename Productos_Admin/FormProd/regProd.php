<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regProd.css">
    <title>Registro Productos</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
</head>
<body>
    <div class="form-container">
        <h2>Registro Productos</h2>
        <form id="registroForm" method="post">
            <div class="form-group">
                <input type="text" name="nomProd" id="nomProd" placeholder="Nombre Producto">
                <input type="text" name="marca" id="marca" placeholder="Marca">
                <input type="number" name="precio" id="precio" placeholder="Precio">
                <div class="image">
                    <p class="texto">Agregar Imagen</p>
                    <input type="file" name="imagen" id="image-file">
                </div>
                <input type="number" name="stock" id="stock" placeholder="Stock del Producto">
                <select name="estado" id="estado">
                    <option value="Disponible">
                        Disponible
                    </option>
                    <option value="Agotado">
                        Agotado
                    </option>
                </select>
                <select name="categoria" id="categoria">
                    <option value="">
                        Categoria
                    </option>
                    <option value="celulares">
                        Celulares
                    </option>
                    <option value="portatiles">
                        Portatiles
                    </option>
                    <option value="computadores">
                        Computadores
                    </option>
                    <option value="tablets">
                        Tablets
                    </option>
                    <option value="audifonos">
                        Audifonos
                    </option>
                    <option value="parlantes">
                        Parlantes
                    </option>
                </select>
            </div>
            <input type="submit" name="registrar" value="Guardar" class="btn">
        </form>
    </div>

    <script>
        // Captura el envío del formulario
        document.getElementById("registroForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente

            var categoria = document.getElementById("categoria").value; // Obtiene el valor de la categoría seleccionada

            if (categoria === "") {
                alert("Por favor, selecciona una categoría.");
            } else {
                // Redirige a la página correspondiente según la categoría seleccionada
                switch (categoria) {
                    case "celulares":
                        window.location.href = "../../Productos_Admin/caracteristicas/celulares.php";
                        break;
                    case "portatiles":
                        window.location.href = "../../Productos_Admin/caracteristicas/portatiles.php";
                        break;
                    case "computadores":
                        window.location.href = "../../Productos_Admin/caracteristicas/comp.php";
                        break;
                    case "tablets":
                        window.location.href = "../../Productos_Admin/caracteristicas/tablets.php";
                        break;
                    case "audifonos":
                        window.location.href = "../../Productos_Admin/caracteristicas/audifonos.php";
                        break;
                    case "parlantes":
                        window.location.href = "../../Productos_Admin/caracteristicas/parlantes.php";
                        break;
                    default:
                        alert("Categoría no válida.");
                        break;
                }
            }
        });
    </script>
</body>
</html>
