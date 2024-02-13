<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
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
        <a class="nav-link disabled">Celulares</a>
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
        <a class="nav-link active" href="parlantes.php">Parlantes</a>
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
            <form action="regCelulares.php" method="POST">
            <div class="mb-3">
                <label for="redDatos" class="form-label">Red Transmision de Datos</label>
                <textarea class="form-control" id="redDatos" name="redDatos" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="dualSim" class="form-label">Dual Sim</label>
                <textarea class="form-control" id="dualSim" name="dualSim" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tipoPuertos" class="form-label">Tipos de Puertos</label>
                <textarea class="form-control" id="tipoPuertos" name="tipoPuertos" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resCamF" class="form-label">Resolucion Camara Frontal</label>
                <textarea class="form-control" id="resCamF" name="resCamF" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="cantCamP" class="form-label">Cantidad Camaras Posteriores</label>
                <textarea class="form-control" id="cantCamP" name="cantCamP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resCamP" class="form-label">Resolucion Camara Posteriror</label>
                <textarea class="form-control" id="resCamP" name="resCamP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resOtrasCamP" class="form-label">Resolucion Otras Camaras Posteriores</label>
                <textarea class="form-control" id="resOtrasCamP" name="resOtrasCamP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="flashF" class="form-label">Flash Frontal</label>
                <textarea class="form-control" id="flashF" name="flashF" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="flashP" class="form-label">Flash Posterior</label>
                <textarea class="form-control" id="flashP" name="flashP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="memoriaInt" class="form-label">Memoria Interna</label>
                <textarea class="form-control" id="memoriaInt" name="memoriaInt" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="memoriaRam" class="form-label">Memoria RAM</label>
                <textarea class="form-control" id="memoriaRam" name="memoriaRam" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="marcaProc" class="form-label">Marca Procesador</label>
                <textarea class="form-control" id="marcaProc" name="marcaProc" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="sistemOp" class="form-label">Sistema Operativo</label>
                <textarea class="form-control" id="sistemOp" name="sistemOp" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="versionSisOp" class="form-label">Version Sistema Operativo</label>
                <textarea class="form-control" id="versionSisOp" name="versionSisOp" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="nucleosP" class="form-label">Nucleos del Procesador</label>
                <textarea class="form-control" id="nucleosP" name="nucleosP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="velocidadP" class="form-label">Velocidad del Procesador</label>
                <textarea class="form-control" id="velocidadP" name="velocidadP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tipoPantalla" class="form-label">Tipo de Pantalla</label>
                <textarea class="form-control" id="tipoPantalla" name="tipoPantalla" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resolucionP" class="form-label">Resolucion Pantalla</label>
                <textarea class="form-control" id="resolucionP" name="resolucionP" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tamPant" class="form-label">Tamaño Pantalla</label>
                <textarea class="form-control" id="tamPant" name="tamPant" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="capacidadB" class="form-label">Capacidad Bateria</label>
                <textarea class="form-control" id="capacidadB" name="capacidadB" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resistencia" class="form-label">Recistencia a</label>
                <textarea class="form-control" id="resistencia" name="resistencia" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="opcionesCon" class="form-label">Opciones de Conectividad</label>
                <textarea class="form-control" id="opcionesCon" name="opcionesCon" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="extra" class="form-label">Extra</label>
                <textarea class="form-control" id="extra" name="extra" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="caractEsp" class="form-label">Caracteristicas Especiales</label>
                <textarea class="form-control" id="caractEsp" name="caractEsp" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="fuentesAlimE" class="form-label">Fuentes de Alimentacion de Energia</label>
                <textarea class="form-control" id="fuentesAlimE" name="fuentesAlimE" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <textarea class="form-control" id="color" name="color" rows="2" required></textarea>
            </div>
                <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>