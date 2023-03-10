<?php

//  ELIMINAR TRATAMIENTO SEGUN EL ID

    include('realizar_conexion.php');
    $id_tratamiento = $_GET['id'];

    $seleccion_eliminar = "SELECT imagen FROM tratamientos WHERE id= $id_tratamiento";
    $eliminar_datos = mysqli_query($conexion, $seleccion_eliminar);
    $eliminar_db = mysqli_fetch_assoc($eliminar_datos);
    
    if (file_exists($eliminar_db['imagen'])) {
        unlink($eliminar_db['imagen']);
    }


    mysqli_query($conexion, "DELETE FROM tratamientos WHERE id = $id_tratamiento ");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A VER TRATAMIENTOS
header("Location: ver_tratamientos.php");

