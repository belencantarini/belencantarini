<?php

//  CARGAR FORMULARIO A BASE DE DATOS DEL ID A MODIFICAR
    $id_form = $_GET['id'];
    $tratamiento_form = $_POST['tratamiento'];
    $tarifa_form = $_POST['tarifa'];
    $descripcion_form = $_POST['descripcion'];
    $imagen_form = $_POST['imagen'];

    include('realizar_conexion.php');

    mysqli_query($conexion, "UPDATE tratamientos SET tratamiento='$tratamiento_form', tarifa='$tarifa_form', imagen='$imagen_form', descripcion='$descripcion_form' WHERE id='$id_form'");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A VER TRATAMIENTOS
header("Location: ver_tratamientos.php");

