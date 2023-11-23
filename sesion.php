<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="registro/sesion.css">
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

        <input type="submit" value="Iniciar sesión" class="button" href="inicio.html">
    
        <p>¿No tienes cuenta? <a class="link" href="registro.php">Regístrate</a></p>
    </div>
</form>
</html>

<?php
include("registro/procesar_login.php");
?>