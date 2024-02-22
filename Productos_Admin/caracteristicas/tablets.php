<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablets</title>
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
        <a class="nav-link active" href="tablets.php">Celulares</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="portatiles.php">Portatiles</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="comp.php">Computadores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Tablets</a>
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
            <form action="regTablets.php" method="POST">
            <div class="mb-3">
                <label for="memoriaInt" class="form-label">Memoria interna</label>
                <textarea class="form-control" id="memoriaInt" name="memoriaInt" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="marcaProce" class="form-label">Marca procesador</label>
                <textarea class="form-control" id="marcaProce" name="marcaProce" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="memoriaRam" class="form-label">Memoria Ram</label>
                <textarea class="form-control" id="memoriaRam" name="memoriaRam" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="SistemaOpe" class="form-label">Sistema operativo</label>
                <textarea class="form-control" id="SistemaOpe" name="SistemaOpe" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="versionOpe" class="form-label">Version sistema operativo</label>
                <textarea class="form-control" id="versionOpe" name="versionOpe" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="nucleosProce" class="form-label">Nucleos del procesador</label>
                <textarea class="form-control" id="nucleosProce" name="nucleosProce" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="VelocidadProce" class="form-label">Velocidad del procesador</label>
                <textarea class="form-control" id="VelocidadProce" name="VelocidadProce" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tiposPuerto" class="form-label">Tipos de puerto</label>
                <textarea class="form-control" id="tiposPuerto" name="tiposPuerto" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="caparaFrontal" class="form-label">Resolucion Camara Frontal</label>
                <textarea class="form-control" id="caparaFrontal" name="caparaFrontal" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="camaraPosterior" class="form-label">Resolucion Camara Posterior</label>
                <textarea class="form-control" id="camaraPosterior" name="camaraPosterior" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="DuracionBa" class="form-label">Duracion de Bateria</label>
                <textarea class="form-control" id="DuracionBa" name="DuracionBa" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="OpcionesCo" class="form-label">Opciones Conectividad</label>
                <textarea class="form-control" id="OpcionesCo" name="OpcionesCo" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="resolucionPa" class="form-label">Resolucion Pantalla</label>
                <textarea class="form-control" id="resolucionPa" name="resolucionPa" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tamañoPa" class="form-label">Tamaño Pantalla</label>
                <textarea class="form-control" id="tamañoPa" name="tamañoPa" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="FuentesEnergia" class="form-label">Fuentes de Alimentacion de Energia</label>
                <textarea class="form-control" id="FuentesEnergia" name="FuentesEnergia" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <textarea class="form-control" id="color" name="color" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="Extra" class="form-label">Extra</label>
                <textarea class="form-control" id="Extra" name="Extra" rows="2" required></textarea>
            </div>
                <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>