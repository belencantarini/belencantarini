<?php
    
    $nombre_form = $_POST['nombre'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];

// ENVIO DE MAIL

$cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;
mail("belencantarini@gmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mensaje);

// CONEXION A BASE DE DATOS

// $conexion = mysqli_connect("localhost", "root", "", "belencantarini")or exit ("No se pudo conectar a base de datos");
$conexion = mysqli_connect("localhost", "id19969330_belen", "Knl](Hd0^#nO~V1-", "id19969330_belencantarini")or exit ("No se pudo conectar a base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?exito_envio");