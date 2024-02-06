<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proveedor</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Registrar Proveedor</h1>
    <div class="col-md-4 mx-auto">
<div class="card card-body">
    <form action="save_prov.php" method="post">
        <div class="form-group p-1">
            <input type="text" name="NIT" class="form-control" placeholder="NIT" required="Importante">
        </div>
        <div class="form-group p-1">
            <input type="text" name="nomProv" class="form-control" placeholder="Nombre Proveedor" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="correoProv" class="form-control" placeholder="Correo" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="nomCont" class="form-control" placeholder="Nombre Contacto" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="apeCont" class="form-control" placeholder="Apellido Contacto" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="telProv" class="form-control" placeholder="Telefono" required>
        </div>
        <div class="form-group p-1">
            <input type="text" name="paginaWeb" class="form-control" placeholder="Pagina Web" required>
        </div>
        <div class="form-group p-1">
            <input type="submit" value="REGISTRAR" class="btn btn-primary" name="save_prov">
            </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    .btn{
        width: 100%;
    }
    .text-h1{
        color: #0080ff !important ;
        padding: 0px 250px;
        text-align: center;
        font-family: 'Bebas Neue', sans-serif;
    }
    body{
        background-color:#ffff !important ;
    }
</style>
</body>
</html>