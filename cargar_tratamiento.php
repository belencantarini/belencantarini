<?php

//  CARGAR FORMULARIO A BASE DE DATOS
    $tratamiento_form = $_POST['tratamiento'];
    $tarifa_form = $_POST['tarifa'];
    if ($_POST['descripcion'] !== "") {$descripcion_form = $_POST['descripcion'];} else {$descripcion_form = "Empeza hoy ese tratamiento que siempre quisiste!!!";};
    if ($_POST['imagen'] !== "") {$imagen_form = $_POST['imagen'];} else {$imagen_form = "https://cdn.pixabay.com/photo/2013/11/28/11/29/heart-220183_960_720.jpg";};

    include('realizar_conexion.php');

    mysqli_query($conexion, "INSERT INTO tratamientos VALUES (DEFAULT, '$tratamiento_form', '$tarifa_form', '$imagen_form', '$descripcion_form')");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A ADMINISTRADOR
header("Location: administrador.php?ok");

