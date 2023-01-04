    <?php include('header.php');?>

    <?php
    // Creo mis variables que contienen las caracteristicas de los tratamientos
    
    $producto = "";
    $descripcion = "";
    $precio = "";
    $imagen = "";
    
    
    const TTO1 = "Acido hialuronico";
    const TTO2 = "Botox";
    const TTO3 = "Hilos tensores";

    $expl1="El tratamiento de relleno de labios con ácido hialurónico es la mejor opción para añadir volumen a tus labios. Pero no solo eso, puede ir mucho más allá del aumento de volumen. Gracias al ácido hialurónico se puede mejorar la estructura del labio";
    $expl2="El botox (o toxina botulínica de tipo A) es una neurotoxina que en la actualidad se suele utilizar en diferentes aplicaciones médicas. La más conocida es para la eliminación de arrugas faciales, ya que es el remedio que ofrece más ventajas: no requiere cirugía, se puede aplicar en cualquier momento, es indolora, sus efectos son inmediatos y muy rara vez produce efectos adversos.";
    $expl3="Los hilos tensores son unos hilos finos utilizados en Medicina Estética para rejuvenecer el rostro. Se pueden aplicar tanto para eliminar las arrugas y la flaccidez facial, como para levantar las cejas o, incluso, para redefinir el óvalo de la cara y el contorno de la mandíbula.";

    $img1="https://img.freepik.com/foto-gratis/manos-cosmetologos-hacen-inyecciones-medicas-botox-hermosa-rubia-lifting-piel-tratamiento-facial-belleza-spa_176420-9347.jpg?w=900&t=st=1668293866~exp=1668294466~hmac=2510e1d5d6ba4342e361a54fac9aee955d2184eb60782abea51984220741848e";
    $img2="https://img.freepik.com/foto-gratis/hermosa-joven-recibiendo-inyeccion-cosmetica-botox-su-rostro_1301-7787.jpg?w=900&t=st=1668293869~exp=1668294469~hmac=a58294f670bbfc30128d97c5fa3e1156d88eba22b3d79dddba6dcc07d21eaf0c";
    $img3="https://img.freepik.com/foto-gratis/cerrar-manos-dando-inyeccion-mujer-joven_23-2149350081.jpg?w=900&t=st=1668277988~exp=1668278588~hmac=f8c81f8d9f60c4628acc1c661768d9b2b1cfca6f56994eeab87683100683ce74";

    $arancel1=5000;
    $arancel2=25000;
    $arancel3=7500;

    $oferta= ($arancel1+$arancel2+$arancel3) * 0.85;

    $display="d-none";

    ?>
    
    <main class="flex-grow-1">
        <section id="tratamientos" class="p-3">
            <div class="text-center">
                <h3>Tratamientos y tarifas</h3>
                <ul class="navbar-nav ms-auto mb-2 mb-xl-0 d-flex flex-row text-center justify-content-around p-3">
                        <li class="nav-item btn btn-outline-dark">
                            <a class="nav-link" aria-current="page" href="<?php echo "tienda.php?producto=" . TTO1 ;?>"><?php echo TTO1;?></a>
                        </li>
                        <li class="nav-item btn btn-outline-dark">
                            <a class="nav-link" aria-current="page" href="<?php echo "tienda.php?producto=" . TTO2 ;?>"><?php echo TTO2;?></a>
                        </li>
                        <li class="nav-item btn btn-outline-dark">
                            <a class="nav-link" aria-current="page" href="<?php echo "tienda.php?producto=" . TTO3 ;?>"><?php echo TTO3;?></a>
                        </li>
                </ul>
            </div>

        <?php
        if(isset($_GET['producto'])) {
            $display="d-block";
            switch ($_GET['producto']) {
                case TTO1:
                    $producto = TTO1;
                    $descripcion = $expl1;
                    $precio = $arancel1;
                    $imagen = $img1;
                    break;
                case TTO2:
                    $producto = TTO2;
                    $descripcion = $expl2;
                    $precio = $arancel2;
                    $imagen = $img2;
                    break;
                case TTO3:
                    $producto = TTO3;
                    $descripcion = $expl3;
                    $precio = $arancel3;
                    $imagen = $img3;
                    break;
                default:
                    $producto = "Ninguno seleccionado";
                    $descripcion = "Nada";
                    $precio = 0;
                    $imagen = "Nada";
            }
        }
        ?>

        <section>
            <div class="card w-75 m-auto <?php echo $display; ?>">
                <div class="row g-0 row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <div class="card-body p-5">
                            <h3 class="card-title"><?php echo $producto; ?></h3>
                            <p class="card-text"><?php echo $descripcion; ?></p>
                            <p class="small">Precio $<?php echo $precio ?></p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <img class="rounded w-100" src=<?php echo $imagen; ?> class="img-fluid" alt="card-horizontal-image">
                    </div>
                </div>
                <p class="small text-center">No te pierdas las oferta del 15% de descuento! Contratando los 3 servicios pagas solo $ <?php echo $oferta;?>,-.</p>
            </div>
        </section>



    </main>
    <?php include('footer.php');?>