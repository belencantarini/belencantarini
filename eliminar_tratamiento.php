<?php

//  ELIMINAR TRATAMIENTO SEGUN EL ID
    $id_form = $_GET['id'];

    include('realizar_conexion.php');

    mysqli_query($conexion, "DELETE FROM tratamientos WHERE id = $id_form ");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A VER TRATAMIENTOS
header("Location: ver_tratamientos.php");

