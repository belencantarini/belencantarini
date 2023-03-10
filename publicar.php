<?php
        include include('fecha.php');
        
        $fecha_post = strval($fecha_actual);
        $hora_post = strval($hora_actual);

        $comentario = 
"<div class='border'>
        <div class='d-flex flex-sm-row flex-column p-3'>
            <div class='d-flex'><span class='round mx-auto'><img src='https://cdn.pixabay.com/photo/2022/12/21/03/54/quotes-7669023_960_720.png' alt='comentario' width='50'></span></div>
            <div class='w-100 ps-2 text-center text-sm-start'>
                <h5>" . $_POST['nombre'] . "</h5>
                <span>" . $fecha_post . "</span>
                <span class='px-2'><i class='fa fa-heart'></i></span>
                <span>" . $hora_post . "</span>
                <p>" . $_POST['mensaje'] . "</p>
            </div>
        </div>
</div>"
;

        $archivo = fopen('comentario1.txt', 'a');
        fputs($archivo, $comentario);

        header("Location: comentarios.php");

?>