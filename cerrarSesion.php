<?php
session_start();
// Unset de la variable de sesión específica
unset($_SESSION['sessCustomerID']);

//Volver al formulario de inicio de sesion
header("Location: index.html");
exit(); // Salir después de la redirección
