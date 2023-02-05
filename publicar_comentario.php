<?php include('header.php');?>
<main class="flex-grow-1">
<section class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div class="h2">Publica tu comentario</div>
        </div>
        
        <div class="border rounded-3">
            <div>
                <div>
                    <form name="comentariosForm" action="publicar.php" method="POST" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container">
                            <label for="nombreComentario" class="form-label">Nombre</label>
                            <input type="text" class="form-control " id="nombreComentario" name="nombre" placeholder="Nombre" required>
                            <label class="mt-3" for="mensajeComentario">Mensaje</label>
                            <textarea class="form-control"  id="mensajeComentario" name="mensaje" cols="30" rows="3" placeholder="Mensaje"></textarea>
                        <div class="d-flex justify-content-center pt-3"><input class="btn btn-dark" type="submit" value="Publicar"></input></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php include('footer.php');?>
