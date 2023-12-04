<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Administradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-4">
    <div class="row">
    <h1 class="text-h1">Registro Administrador</h1>
    <div class="col-md-4 mx-auto">
<div class="card card-body">
    <form action="saveAdmin.php" method="post">
            <div class="form-group mb-3">
                <input type="text" name="nomAdmin" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="apeAdmin" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="cargo" class="form-control" placeholder="Cargo">
            </div>
            <div class="form-group mb-3">
            <select name="estado" class="form-control">
                    <option value="Activo">Activo</option>
                    <option value="Vacaciones">Vacaciones</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correoAdmin" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group mb-3">
                <input type="password" name="passAdmin" class="form-control" placeholder="Contraseña">
            </div>
        <div class="form-group p-1">
            <input type="submit" value="REGISTRAR" class="btn btn-dark" name="saveAdmin">
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
        color: #ffff !important ;
        padding: 0px 250px;
        text-align: center;
        font-family: 'Bebas Neue', sans-serif;
    }
    body{
        background-color: black !important ;
    }
</style>
</body>
</html>