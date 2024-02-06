<?php
// Unset de la variable de sesión específica
unset($_SESSION['sessAdminID']);

// Destruir todas las variables de sesión
session_destroy();
//Volver al formulario de inicio de sesion
header("Location: sesionAdmin.php");
exit(); // Salir después de la redirección
?>