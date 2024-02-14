<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audifonos</title>
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
        <a class="nav-link disabled">Audifonos</a>
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
            <form action="regAudifonos.php" method="POST">
            <div class="mb-3">
                <label for="resistencia" class="form-label">Resistencia a </label>
                <textarea class="form-control" id="resistencia" name="resistencia" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="conectividad" class="form-label">Conectividad</label>
                <textarea class="form-control" id="conectividad" name="conectividad" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="duracionBateria" class="form-label">Duracion bateria</label>
                <textarea class="form-control" id="duracionBateria" name="duracionBateria" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="conexion" class="form-label">Conexion</label>
                <textarea class="form-control" id="conexion" name="conexion" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <textarea class="form-control" id="color" name="color" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="longitudCable" class="form-label">Longitud cable cm</label>
                <textarea class="form-control" id="longitudCable" name="longitudCable" rows="2" required></textarea>
            </div>
                <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>