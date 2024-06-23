<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Administradores</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
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
                <input type="text" name="estado" class="form-control" value="Activo" readonly>
            </div>
            <div class="form-group mb-3">
                <input type="email" name="correoAdmin" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group mb-3">
                <input type="password" id="pass" name="passAdmin" class="form-control" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Debe contener un número, una mayúscula, una minúscula, y al menos 8 o más carácteres">
                <i class="fas fa-eye-slash" id="togglePassword" onclick="togglePassword()" style="visibility: visible;top: 294px;right: 32px;position: absolute;"></i>
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
<script>
        function togglePassword() {
            var passwordField = document.getElementById('pass');
            var toggleIcon = document.getElementById('togglePassword');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>
</html>