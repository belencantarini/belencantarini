<?php
        include include('fecha.php');
        
        $fecha_post = strval($fecha_actual);
        $hora_post = strval($hora_actual);

        $comentario = 
        "<div class='border'>
                <div class='d-flex flex-row p-3'>
                    <div class='p-2'><span class='round'><img src='https://cdn.pixabay.com/photo/2022/12/21/03/54/quotes-7669023_960_720.png' alt='comentario' width='50'></span></div>
                    <div class='w-100'>
                        <h5 class='pt-3'>" . $_POST['nombre'] . "</h5>
                        <div>
                            <span>" . $fecha_post . "</span>
                            <span class='px-2'><i class='fa fa-heart'></i></span>
                            <span>" . $hora_post . "</span>
                        </div>
                        <p class='m-b-5 m-t-10'>" . $_POST['mensaje'] . "</p>
                    </div>
                </div>
        </div>";


        $archivo = fopen('comentario1.txt', 'a');
        fputs($archivo, $comentario);

        header("Location: comentarios.php");

?>