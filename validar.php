<?php

session_start();
include('realizar_conexion.php');

$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$clave = mysqli_real_escape_string($conexion, $_POST['clave']);
$codigo_captcha = $_POST['captcha'];

// Consulta para seleccionar el usuario con el nombre de usuario y la contraseña proporcionados
$consultaAdministrador = mysqli_query($conexion, "SELECT * FROM administradores WHERE usuario = '$usuario' AND clave = '$clave'");
// Verificar el captcha
if ($codigo_captcha == $_SESSION['codigo_captcha']) {
    // Verificar si se encontró algún usuario con ese nombre de usuario y contraseña
    if (mysqli_num_rows($consultaAdministrador) == 1) {
        // Iniciar sesión
        session_start();
        $_SESSION['admin'] = $usuario;
        header("Location: ver_tratamientos.php");
    } else {
        // Mensaje de error si los datos son inválidos
        header("Location: login.php?error");
    }
} else {
    header("Location: login.php?error_captcha");
}
mysqli_close($conexion);

