<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro/registro.css">


    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>REGISTRATE</h1>
        </div>
        <form id="form" class="form" method="post" onsubmit='return validarForm()'>
            <div class="form-control">
                <img src="registro/documento.png" />
                <select name="tipoId" id="tipoId">
                    <option value="">Tipo de Documento</option>
                    <option value="CC">C.C.</option>
                    <option value="CE">C.E.</option>
                    <option value="TI">T.I.</option>
                </select>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="documento"></label>
                <img src="registro/numerodocumento.png" />
                <input maxlength="10" minlength="1" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    type="text" placeholder="N° Documento" id="documento" name="numId" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="Nombres"></label>
                <img src="registro/persona.png" />
                <input maxlength="20" minlength="1" oninput="this.value = this.value.replace(/[^A-Za-z]/g, '');"
                    type="text" placeholder="Nombre" id="Nombres" name="nombre" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="Apellidos"></label>
                <img src="registro/persona.png" />
                <input maxlength="20" minlength="1" oninput="this.value = this.value.replace(/[^A-Za-z-ñ]/g, '');"
                    type="text" placeholder="Apelido" id="Apellidos" name="apellido" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email"></label>
                <img src="registro/correo.png" />
                <input type="email" placeholder="Correo Electronico" id="email" name="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password"></label>
                <img src="registro/pass.png" />
                <input type="password" placeholder="Contraseña" id="password" name="password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="cell"></label>
                <img src="registro/telefono.png" />
                <input maxlength="10" minlength="1" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    type="text" placeholder="Numero de Telefono" id="cell" name="telefono" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <img src="registro/fecha.png" />
                <input type="date" placeholder="Fecha de Nacimiento" id="fecha" name="fecha" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
<center>
            <div class="form-checkbox">
                <div class="g-recaptcha" data-sitekey="6Le2ubkoAAAAALzMy_9dhRDX5PGyeVzbRkaPszuM"></div>
            </div><br>

            <div class="form-checkbox">
                <input type="checkbox" class="checkTC" id="checkTC" required="" />
                <label for="checkTC">
                    ¿Aceptas nuestros <a class="link" href="terminos/terminos.html">Terminos y Condiciones?</a>
                </label>
            </div>

            <input type="submit" name="registrar" value="Registrarse" class="btn" href="inicio.html">
            <p>¿Ya tienes cuenta? <a class="link" href="sesion.php">Inicia Sesión</a></p>
        </form>
    </div>
    <script src="registro/registro.js"></script>

<?php
    include("registro/registrar.php");
?>
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
</body>
</html>