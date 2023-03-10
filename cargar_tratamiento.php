<?php

session_start();

//  CARGAR FORMULARIO A BASE DE DATOS
    $tratamiento_form = $_POST['tratamiento'];
    $tarifa_form = $_POST['tarifa'];
    if ($_POST['descripcion'] !== "") {$descripcion_form = $_POST['descripcion'];} else {$descripcion_form = "Empeza hoy ese tratamiento que siempre quisiste!!!";};
    
    if ($_FILES['archivo']['name'] !== ""){
        // CARGAR IMAGEN DESDE ARCHIVO
        $original = $_FILES['archivo'];
        $nombre = $original['name'];
        $array_nombre = explode('.',$nombre);
        $extension = array_pop($array_nombre);
        $array = glob('imagenes/'.$array_nombre[0]."*".$extension);
        $cantidad=count($array);
        $nombre_final = $array_nombre[0].$cantidad.".".$extension;
        move_uploaded_file($original['tmp_name'], 'imagenes/' . $nombre_final);

        $imagen_form = "./imagenes/" . $nombre_final;
    } else if ($_POST['imagenUrl'] !== "") {
        $imagen_form = $_POST['imagenUrl'];
    } else {
        $imagen_form = "https://cdn.pixabay.com/photo/2013/11/28/11/29/heart-220183_960_720.jpg";
    };

    include('realizar_conexion.php');

    mysqli_query($conexion, "INSERT INTO tratamientos VALUES (DEFAULT, '$tratamiento_form', '$tarifa_form', '$imagen_form', '$descripcion_form', 'procesando')");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A ADMINISTRADOR
header("Location: administrador.php?ok");

