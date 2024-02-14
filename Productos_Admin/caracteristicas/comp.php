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
            <form action="regComp.php" method="POST">
            <div class="mb-3">
                <label for="ResCam" class="form-label">Resolucion Camara Web</label>
                <textarea class="form-control" id="ResCam" name="ResCam" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="PuertoHDMI" class="form-label">No. Puertos HDMI</label>
                <textarea class="form-control" id="PuertoHDMI" name="PuertoHDMI" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NLAN" class="form-label">No. Puertos LAN Ethernet</label>
                <textarea class="form-control" id="NLAN" name="NLAN" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NUSB" class="form-label">No. Puertos USB</label>
                <textarea class="form-control" id="NUSB" name="NUSB" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NAUDIO" class="form-label">No. Salidas de Audio</label>
                <textarea class="form-control" id="NAUDIO" name="NAUDIO" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipPuer" class="form-label">Tipos de Puertos</label>
                <textarea class="form-control" id="TipPuer" name="TipPuer" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NiUso" class="form-label">Nivel de uso</label>
                <textarea class="form-control" id="NiUso" name="NiUso" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="caracEs" class="form-label">Caracteristicas Especiales</label>
                <textarea class="form-control" id="caracEs" name="caracEs" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ResPan" class="form-label">Resolucion Pantalla</label>
                <textarea class="form-control" id="ResPan" name="ResPan" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TamPa" class="form-label">Tamaño Pantalla</label>
                <textarea class="form-control" id="TamPa" name="TamPa" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="MeRam" class="form-label">Memoria RAM</label>
                <textarea class="form-control" id="MeRam" name="MeRam" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipDis" class="form-label">Tipo de Discos que Incluye</label>
                <textarea class="form-control" id="TipDis" name="TipDis" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="CapDis" class="form-label">Capacidad de Disco</label>
                <textarea class="form-control" id="CapDis" name="CapDis" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="MarPro" class="form-label">Marca Procesador</label>
                <textarea class="form-control" id="MarPro" name="MarPro" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="Proce" class="form-label">Procesador</label>
                <textarea class="form-control" id="Proce" name="Proce" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="modPro" class="form-label">Modelo Procesador</label>
                <textarea class="form-control" id="modPro" name="modPro" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="marTarV" class="form-label">Marca Tarjeta de Video/Grafica</label>
                <textarea class="form-control" id="marTarV" name="marTarV" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="SisOp" class="form-label">Sistema Operativo</label>
                <textarea class="form-control" id="SisOp" name="SisOp" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="verSis" class="form-label">Version Sistema Operativo</label>
                <textarea class="form-control" id="verSis" name="verSis" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NuProc" class="form-label">Nucleos del Procesador</label>
                <textarea class="form-control" id="NuProc" name="NuProc" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="VelProc" class="form-label">Velocidad del Procesador</label>
                <textarea class="form-control" id="VelProc" name="VelProc" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="FuEner" class="form-label">Fuentes de Alimentacion de Energia</label>
                <textarea class="form-control" id="FuEner" name="FuEner" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <textarea class="form-control" id="color" name="color" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="OpConec" class="form-label">Opciones Conectividad</label>
                <textarea class="form-control" id="OpConec" name="OpConec" rows="2" required></textarea>
            </div>
           
                <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>