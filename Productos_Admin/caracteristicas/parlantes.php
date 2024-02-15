<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parlantes</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <a class="navbar-brand">PRODUCTOS</a>
        <li class="nav-item">
        <a class="nav-link active" href="celulares.php">Celulares</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="portatiles.php">Portatiles</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="comp.php">Computadores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="tablets.php">Tablets</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="audifonos.php">Audifonos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Parlantes</a>
        </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../../CRUD/crudProd/crud.php">CRUD</a>
            </li>
        </ul>
        </div>
        </nav>
        <br>
        <div class="container">
        <div class="col">
            <form action="regParlantes.php" method="POST">
            <div class="mb-3">
                <label for="ResCam" class="form-label">Resistencia a</label>
                <textarea class="form-control" id="Resist" name="Resist" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="PuertoHDMI" class="form-label">Caracteristicas Especiales</label>
                <textarea class="form-control" id="CaracterEspecial" name="CaracterEspecial" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NLAN" class="form-label">Portabilidad</label>
                <textarea class="form-control" id="Portabili" name="Portabili" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NUSB" class="form-label">Fuentes de Alimentacion de Energia</label>
                <textarea class="form-control" id="FAE" name="FAE" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NAUDIO" class="form-label">Color</label>
                <textarea class="form-control" id="Color" name="Color" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipPuer" class="form-label">Duracion Bateria</label>
                <textarea class="form-control" id="DuraBateri" name="DuraBateri" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NiUso" class="form-label">Rango Bluetooth</label>
                <textarea class="form-control" id="Bluetooth" name="Bluetooth" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="caracEs" class="form-label">Opciones Conectividad</label>
                <textarea class="form-control" id="Conectividad" name="Conectividad" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ResPan" class="form-label">Conexion</label>
                <textarea class="form-control" id="Conexion" name="Conexion" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TamPa" class="form-label">Ancho en Cm</label>
                <textarea class="form-control" id="AnchoCm" name="AnchoCm" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="MeRam" class="form-label">Alto en Cm</label>
                <textarea class="form-control" id="AltoCm" name="AltoCm" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipDis" class="form-label">Fondo en Cm</label>
                <textarea class="form-control" id="FondoCm" name="FondoCm" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="CapDis" class="form-label">Extra</label>
                <textarea class="form-control" id="Extra" name="Extra" rows="2" required></textarea>
            </div>

                <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>