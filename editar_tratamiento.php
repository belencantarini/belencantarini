<?php include('header.php');?>
<main class="flex-grow-1">
<section class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div class="h2">Tratamientos y Tarifas</div>
            <div class="pb-3">Administracion de servicios</div>
        </div>
        
        <div class="border rounded-3">
            <nav class="nav pink justify-content-end gap-2 py-3 px-4">
                <a class="nav-link" href="administrador.php">Generar nuevo tratamiento</a>
                <a class="nav-link" href="ver_tratamientos.php">Ver tratamientos</a>
                <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="index.php">VOLVER</a></button>    
            </nav>
            <div>
                <div>
                    <?php include('realizar_conexion.php');
                    $id_tratamiento = $_GET['id'];
                    $seleccion = "SELECT * FROM tratamientos WHERE id= $id_tratamiento";
                    $editar_db = mysqli_query($conexion, $seleccion);
                    while ($editar_datos = mysqli_fetch_assoc($editar_db)){
                    ?>
                    <form name="editarTratamientos" action="modificar_tratamiento.php?id=<?php echo $id_tratamiento; ?>" method="POST" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container">
                            <p class="text-center">Id. del tratamiento: <?php echo $editar_datos['id']?></p> 
                            <div class="row ">
                                <div class="col-8 ps-0">
                                    <label for="formTratamiento" class="form-label">Tratamiento</label>
                                    <div><input type="text" class="form-control " id="formTratamiento" name="tratamiento" placeholder="Tratamiento" value='<?php echo $editar_datos['tratamiento']?>' required></div>
                                </div>
                                <div class="col-4 pe-0">
                                    <label for="formTarifa" class="form-label">Tarifa</label>
                                    <div><input type="number" class="form-control "  id="formTarifa" name="tarifa" placeholder="Tarifa" value='<?php echo $editar_datos['tarifa']?>' required></div>
                                </div>
                            </div>
                        </div>
                        <label class="mt-3" for="formDescripcion">Descripcion</label>
                        <textarea class="form-control"  id="formDescripcion" name="descripcion" cols="30" rows="3" placeholder="Descripcion"><?php echo $editar_datos['descripcion']?></textarea>
                        <label for="formImagen" class="form-label mt-3">URL de la imagen</label>
                        <input type="text" class="form-control mb-3"  id="formImagen" name="imagen" placeholder="URL imagen" value='<?php echo $editar_datos['imagen']?>'>
                        <div class="d-flex justify-content-center p-3"><img src="<?php echo $editar_datos['imagen']?>" class="img-thumbnail" alt="img-thumbnail" height="200"></div>
                        <div class="d-flex justify-content-center"><input class="btn btn-dark" type="submit" value="Guardar cambios"></input></div>
                    </form>
                    <?php
                    }
                    mysqli_close($conexion);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php include('footer.php');?>

