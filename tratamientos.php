<section id="tratamientos" class="w-75 m-auto py-5">
    <div class="text-center">
        <h3 class="text-uppercase pt-5 pb-3">Tratamientos y tarifas</h3>
        <div class="border rounded-3">
            <div>
                <div class="row row-cols-lg-3 row-cols-1 g-3 p-3">
                    <?php include('realizar_conexion.php');
                    $consulta_db = mysqli_query($conexion, "SELECT * FROM tratamientos WHERE estado = 'finalizado'");
                    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="d-flex image-size">
                                <img src="<?php echo $mostrar_datos['imagen'];?>" class="card-img-top tto-image mt-0 mx-auto" alt="<?php echo $mostrar_datos['tratamiento'];?>">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1">
                                    <h5 class="card-title"><?php echo $mostrar_datos['tratamiento'];?></h5>
                                    <p class="card-text"><?php echo $mostrar_datos['descripcion']?></p>
                                    <p class="card-text"><small class="text-muted">Tarifa $ <?php echo $mostrar_datos['tarifa'];?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    mysqli_close($conexion);
                    ?>
                </div>
            </div>
        </div> 
    </div>
    <p class="small text-center">No te pierdas las oferta del 15% de descuento contratando al menos 3 servicios!</p>
    <div class="d-flex justify-content-center p-5">
        <button class="btn btn-purple px-5 py-3"><a class="nav-link" aria-current="page" href="administrador.php">Administrar tratamientos y servicios</a></button>
    </div>
</section>
