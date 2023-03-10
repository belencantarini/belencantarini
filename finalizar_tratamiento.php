<?php

//  CONFIRMAR TRATAMIENTO SEGUN EL ID
    $id_form = $_GET['id'];

    include('realizar_conexion.php');

    mysqli_query($conexion, "UPDATE tratamientos set estado='finalizado' where id = $id_form");

    mysqli_close($conexion);


// EXITO DE CARGA REGRESA A VER TRATAMIENTOS
header("Location: confirmar_tratamiento.php");

