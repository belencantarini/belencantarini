<?php include('header.php');?>
<main class="flex-grow-1">
<section class="w-75 m-auto py-5">
    <div>
        
        
        <div class="border rounded-3 p-5">
        
            <div class="text-uppercase text-center">
                <div class="h2">Nuestros pacientes!</div>
                <div class="pb-3">Deja tu experiencia en nuestra comunidad</div>
            </div>

            <?php
            $documento = 'comentario1.txt';
            $archivo = fopen($documento, 'r');
            echo fread($archivo, filesize($documento));
            fclose($archivo);
            ?>

            
            <div class="d-flex justify-content-center p-5">
                <button class="btn btn-purple px-5 py-3"><a class="nav-link" aria-current="page" href="publicar_comentario.php">Comparti vos tambien tu experiencia</a></button>
            </div>   
        </div>                     
    </div>
</section>
</main>
<?php include('footer.php');?>