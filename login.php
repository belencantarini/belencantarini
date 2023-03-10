<?php 
    include('header.php');
    session_start(); 
?>

<section class="m-auto p-5 border rounded shadow">
    <div class="text-uppercase text-center">
            <div class="h2">Iniciar sesión</div>
    </div>     
    <form action="validar.php" method="post" class="container p-0 d-flex flex-column">
        <label for="Usuario" class="pt-3">Nombre de usuario:</label>
        <input type="text" class="form-control w-100" id="formUsuario" name="usuario" placeholder="Usuario" required>
        <label for="Contraseña"  class="pt-3">Contraseña:</label>
        <input type="password" class="form-control w-100" id="formClave" name="clave" placeholder="Contraseña" minlengh='8' maxlength="20" required>
        <img src="captcha.php" alt="captcha" class="pt-4 pb-2 mx-auto">
        <input type="text" name="captcha" class="form-control w-75 mx-auto" placeholder="Ingrese el captcha">
        <input class="btn btn-purple w-100 mt-4" type="submit" value="Iniciar sesión"></input>
    </form>
</section>

<?php
if (isset($_GET['error'])){
    echo "<h4 class='text-center pt-2 pb-4'>Usuario y/o contraseña ingresados incorrectos</h4>";
}
if (isset($_GET['error_captcha'])){
    echo "<h4 class='text-center pt-2 pb-4'>Codigo de verificación incorrecto</h4>";
}
?>

<?php include('footer.php'); ?>
