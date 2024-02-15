<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portatiles</title>
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
        <a class="nav-link disabled">Portatiles</a>
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
            <form action="regPortatiles.php" method="POST">
            <div class="mb-3">
                <label for="ResCam" class="form-label">Duracion Bateria</label>
                <textarea class="form-control" id="DuracionBateria" name="DuracionBateria" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="PuertoHDMI" class="form-label">Opciones Conectividad</label>
                <textarea class="form-control" id="OpcionesConectividad" name="OpcionesConectividad" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NLAN" class="form-label">Resolucion Camara Web</label>
                <textarea class="form-control" id="ResolucionCamaraWeb" name="ResolucionCamaraWeb" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NUSB" class="form-label">No. Puertos HDMI</label>
                <textarea class="form-control" id="NoPuertosHDMI" name="NNoPuertosHDMIUSB" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NAUDIO" class="form-label">No. Puertos USB</label>
                <textarea class="form-control" id="NoPuertosUSB" name="NoPuertosUSB" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NAUDIO" class="form-label">No. Puertos USB Tipo C</label>
                <textarea class="form-control" id="NoPuertosUSBTipoC" name="NoPuertosUSBTipoC" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipPuer" class="form-label">No. Puertos SD</label>
                <textarea class="form-control" id="NoPuertosSD" name="NoPuertosSD" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NiUso" class="form-label">No. Salidas de Audio</label>
                <textarea class="form-control" id="NoSalidasdeAudio" name="NoSalidasdeAudio" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="caracEs" class="form-label">Tipos de Puertos</label>
                <textarea class="form-control" id="TiposDePuertos" name="TiposDePuertos" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="ResPan" class="form-label">Nivel de uso</label>
                <textarea class="form-control" id="NivelDeUso" name="NivelDeUso" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TamPa" class="form-label">Caracteristicas Especiales</label>
                <textarea class="form-control" id="CaracteristicasEspeciales" name="CaracteristicasEspeciales" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="MeRam" class="form-label">Resolucion Pantalla</label>
                <textarea class="form-control" id="ResolucionPantalla" name="ResolucionPantalla" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="TipDis" class="form-label">Tamaño Pantalla</label>
                <textarea class="form-control" id="TamañoPantalla" name="TamañoPantalla" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="MarPro" class="form-label">Memoria RAM</label>
                <textarea class="form-control" id="MemoriaRAM" name="MemoriaRAM" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="Proce" class="form-label">Tipo de Discos que Incluye</label>
                <textarea class="form-control" id="TipoDeDiscos" name="TipoDeDiscos" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="modPro" class="form-label">Capacidad de Disco</label>
                <textarea class="form-control" id="CapacidadDeDisco" name="CapacidadDeDisco" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="marTarV" class="form-label">Marca Procesador</label>
                <textarea class="form-control" id="MarcaProcesador" name="MarcaProcesador" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="verSis" class="form-label">Procesador</label>
                <textarea class="form-control" id="Procesador" name="Procesador" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="NuProc" class="form-label">Modelo Procesador</label>
                <textarea class="form-control" id="ModeloProcesador" name="ModeloProcesador" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="VelProc" class="form-label">Marca Tarjeta de Video/Grafica</label>
                <textarea class="form-control" id="TarjetaVideo" name="TarjetaVideo" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="FuEner" class="form-label">Sistema Operativo</label>
                <textarea class="form-control" id="SistemaOperativo" name="SistemaOperativo" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Version Sistema Operativo</label>
                <textarea class="form-control" id="VersionSistemaOperativo" name="VersionSistemaOperativo" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="OpConec" class="form-label">Nucleos del Procesador</label>
                <textarea class="form-control" id="NucleosDelProcesador" name="NucleosDelProcesador" rows="2" required></textarea>
            </div>
                        </div>
            <div class="mb-3">
                <label for="color" class="form-label">No. Puertos HDMI</label>
                <textarea class="form-control" id="NoPuertosHDMI" name="NoPuertosHDMI" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="OpConec" class="form-label">Velocidad del Procesador</label>
                <textarea class="form-control" id="VelocidadDelProcesador" name="VelocidadDelProcesador" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Fuentes de Alimentacion de Energia</label>
                <textarea class="form-control" id="FuenteAlimentacion" name="FuenteAlimentacion" rows="2" required></textarea>
            </div>
            <div class="mb-3">
                <label for="OpConec" class="form-label">Color</label>
                <textarea class="form-control" id="Color" name="Color" rows="2" required></textarea>
            </div>

            <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        </div>
</body>
</html>