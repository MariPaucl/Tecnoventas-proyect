<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="registro/sesion.css">
<title>Inicia Sesion</title>
<link rel="website icon" type="png" href="imagenes/Tecnoventas.png">
<form class="formulario" method="post" onsubmit='return validarForm()'>
    <div class="mensaje-error"></div>

    <h1>INICIA SESIÓN</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-nomusu"></i>
            <img src="registro/documento.png" />
            <select id="tipoId" name="tipoId">
                <option value="">Tipo de Documento</option>
                <option value="CC">C.C.</option>
                <option value="CE">C.E.</option>
                <option value="TI">T.I.</option>
            </select>
        </div>

        <div class="input-contenedor">
            <i class="fas fa-nomusu"></i>
            <img src="registro/persona.png" />
            <input type="number" id="numId" name="numId" placeholder="N° Documento">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-contraseña"></i>
            <img src="registro/pass.png" />
            <input type="password" id="pass" name="password" placeholder="Contraseña">
        </div>
        <a id="psw" href="recuperaPsw/recover_psw.php">¿Olvidaste tu Contraseña?</a>
        <input type="submit" value="Iniciar sesión" class="button" href="inicio.php">

        <p>¿No tienes cuenta? <a class="link" href="registro.php">Regístrate</a></p>
        <p>¿Eres Administrador? <a class="link" href="sesionAdmin.php">Inicia sesión aquí</a></p>
    </div>
</form>
<style>
    #psw {
    text-decoration: none;
    color: #3e1337;
    display: flex;
    justify-content: center;
        }
</style>
</html>

<?php
include("registro/procesar_login.php");
?>