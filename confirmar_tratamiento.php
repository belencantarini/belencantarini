<?php

session_start();
if (isset($_SESSION['admin'])){

include('header.php');?>


<main class="flex-grow-1">
<section class="w-75 m-auto py-5">
    <div>
        <div class="text-uppercase text-center">
            <div class="h2">Tratamientos y Tarifas</div>
            <div class="pb-3">Administracion de servicios</div>
        </div>
        
        <div class="border rounded-3">
            <nav class="nav pink justify-content-end gap-2 py-3 px-4">
                <a class="nav-link" href="ver_tratamientos.php">Listado de tratamientos</a>
                <a class="nav-link" href="administrador.php">Generar nuevo tratamiento</a>
                <a class="nav-link active" href="confirmar_tratamiento.php">Pendientes de confirmacion</a>
                <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="salir.php">SALIR</a></button>    
            </nav>
            <div>
                <div class="row row-cols-lg-3 row-cols-1 g-3 p-3">
                    <?php include('realizar_conexion.php');
                    $consulta_db = mysqli_query($conexion, "SELECT * FROM tratamientos WHERE estado = 'procesando'");
                    if (mysqli_num_rows($consulta_db) > 0) {
                    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
                    ?>

                    <div class="col">
                        <div class="card h-100">
                            <div class="d-flex image-size">
                                <img src="<?php echo $mostrar_datos['imagen'];?>" class="card-img-top tto-image mt-0 mx-auto" alt="<?php echo $mostrar_datos['tratamiento'];?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $mostrar_datos['tratamiento'];?></h5>
                                <p class="card-text"><?php echo $mostrar_datos['descripcion']?></p>
                                <p class="card-text"><small class="text-muted">Tarifa $ <?php echo $mostrar_datos['tarifa'];?></small></p>
                                <p class="card-text"><small class="text-muted">Estado: <?php echo $mostrar_datos['estado'];?></small></p>
                                <div class="d-flex gap-2 justify-content-end">
                                    <button type="button" class="btn btn-warning"><a class="text-decoration-none text-dark" href="editar_tratamiento.php?id=<?php echo $mostrar_datos['id']; ?>">Editar</a></button>
                                    <button type="button" class="btn btn-danger"><a class="text-decoration-none text-light" href="eliminar_tratamiento.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a></button>
                                    <button type="button" class="btn btn-success"><a class="text-decoration-none text-light" href="finalizar_tratamiento.php?id=<?php echo $mostrar_datos['id']; ?>">Finalizar</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } 
                    } else {
                        echo "<h4 class='p-5 w-100'>No hay tratamientos pendientes de confirmacion para mostrar</h4>";
                    }
                    mysqli_close($conexion);
                    ?>
                </div>
            </div>
        </div>                
    </div>
</main>
<?php include('footer.php');
} 
else{
    header("Location:login.php");
}
?> 