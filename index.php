<?php include('header.php');?>
<main class="flex-grow-1">
    <section>
        <div class="banner d-flex flex-column justify-content-around">
            <div class="d-flex flex-column justify-content-end align-items-end text-end pt-5 pe-5">
                <h2>Medicina estetica</h2>
                <p>Esta es tu oportunidad de sentirte plena y hacer eso que siempre quisiste para estar mejor. Los tratamientos son minimamente invasivos y se adaptan a cada necesidad.<p>
                <button type="button" class="btn btn-outline-dark"><a href="index.php#tratamientos" class="text-decoration-none text-white">Quiero saber más!</a></button>
                <button type="button" class="btn-purple btn "><a href="index.php#contacto" class="text-white text-decoration-none">Contacto</a></button>
            </div>
            <div class="px-5">
                <?php include('fecha.php');
                echo $fecha_actual;
                ?>
            </div>
        </div>
    </section>

    <?php include('tratamientos.php');?>
    <?php include('sobremi.php');?>
    <?php include('contacto.php');?>
</main>

<?php include('footer.php');?>