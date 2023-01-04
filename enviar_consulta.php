<?php
    
    $nombre_form = $_POST['nombre'];
    $email_form = $_POST['email'];
    $mensaje_form = $_POST['mensaje'];

// CONEXION A BASE DE DATOS

$conexion = mysqli_connect("localhost", "root","", "belencantarini")or exit ("No se pudo conectar a base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?exito_envio");