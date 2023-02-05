<?php

// ENVIO DE MAIL
    $nombre_form = $_POST['nombre'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];
    $cuerpo_mensaje = "Nombre: " . $nombre_form . "\r\n" . "Email: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;

mail("belencantarini@gmail.com", "Mensaje enviado desde mi sitio web", $cuerpo_mensaje);

include('realizar_conexion.php');

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);


// NOTIFICACION ENVIO DE MENSAJE
header("Location: index.php?exito_envio");

