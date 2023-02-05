<?php include('header.php');?>
<head><link rel="stylesheet" href="style.css"></head>
<main class="flex-grow-1">
<section class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div class="h2">Tratamientos y Tarifas</div>
            <div class="pb-3">Administracion de servicios</div>
        </div>
        
        <div class="border rounded-3">
            <nav class="nav pink justify-content-end gap-2 py-3 px-4">
                <a class="nav-link active" href="administrador.php">Generar nuevo tratamiento</a>
                <a class="nav-link" href="ver_tratamientos.php">Ver tratamientos</a>
                <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="index.php">VOLVER</a></button>    
            </nav>
            <div>
                <div>
                    <form name="administrarTratamientos" action="cargar_tratamiento.php" method="POST" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container"> 
                            <div class="row ">
                                <div class="col-8 ps-0"><input type="text" class="form-control " id="formTratamiento" name="tratamiento" placeholder="Tratamiento" required></div>
                                <div class="col-4 pe-0"><input type="number" class="form-control "  id="formTarifa" name="tarifa" placeholder="Tarifa" required></div>
                            </div>
                        </div>
                        <textarea class="form-control mt-3"  id="formDescripcion" name="descripcion" cols="30" rows="3" placeholder="Descripcion"></textarea>
                        <input type="text" class="form-control my-3"  id="formImagen" name="imagen" placeholder="URL imagen">
                        <div class="d-flex justify-content-center"><input class="btn btn-dark" type="submit" value="Cargar tratamiento"></input></div>
                    </form>
                </div>
            </div>
        </div>                
    </div>
    <?php
            function tratamientoCargado (){
                echo "<h4 class='text-center py-3'> Tratamiento cargado con exito.</h3>";
            }
            if (isset($_GET['ok'])) {
                tratamientoCargado();
            }
        ?>
</section>
</main>
<?php include('footer.php');?>