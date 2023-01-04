<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Dra Julieta</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <img src="https://cdn.pixabay.com/photo/2019/07/30/06/00/rose-4372048_960_720.png" alt="Logo" height="70" class="d-inline-block align-text-center">
                    <span class="h4 px-3">Dra Julieta BC - Medicina Estetica</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse show" id="navbarBasic">
                    <ul class="navbar-nav ms-auto mb-2 mb-xl-0 gap-1">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="tienda.php">Los tratamientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#sobremi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link purple" aria-current="page" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-grow-1">
        <section class="w-75 m-auto py-5">
            <div>
                <div>
                    <div class="text-uppercase text-center">
                        <div>Contactame</div>
                        <div class="h2">Enviame tu consulta</div>
                    </div>        
                    <form name="sendEmailForm" action="enviar_consulta.php" method="POST" class="container p-0">
                        <div class="d-flex gap-2 flex-column flex-md-row gap-2 m-0">
                            <input type="text" class="form-control w-100" id="formNombre" name="nombre" placeholder="Nombre" required>
                            <input type="email" class="form-control w-100" id="formEmail" name="email" placeholder="Correo" required>
                        </div>
                        <textarea class="form-control mt-3"  name="mensaje" id="formMensaje" cols="30" rows="5" placeholder="Sobre qué quieres consultar?" required></textarea>
                        <input type="hidden" name="_subject" value="Nuevo mensaje!">
                        <p class="text-muted small">Envia tu consulta y te contestare a la brevedad</p>
                        <input class="btn btn-purple w-100" type="submit" value="Enviar formulario"></input>
                    </form>
                </div>

                <?php
                if (isset($_GET['exito_envio'])) {
                    echo "<h3 class='text-center pt-2'> Su mensaje fue enviado con exito </h3>";
                }

                ?>
        </section>
    </main>
    <footer>
        <nav class="navbar navbar-expand-lg navfooter">
            <div class="container-fluid d-flex justify-content-center justify-content-md-between px-3 px-sm-5">
                <a class="navbar-brand" href="#">
                    <p class="h4 px-3">Dra Julieta BC - Medicina Estetica</p>
                </a>
                <div class="d-flex">
                    <ul class="mediaicons d-flex nav">  
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-1x" aria-hidden="true"></i><p class="d-none">Facebook</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-1x" aria-hidden="true"></i><p class="d-none">Instagram</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-1x" aria-hidden="true"></i><p class="d-none">Twitter</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in fa-1x" aria-hidden="true"></i><p class="d-none">LinkedIn</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="mailto:belencantarini@gmail.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><p class="d-none">Gmail</p></a></li>
                        <li class="nav-item"><a class="nav-link d-flex" href="https://api.whatsapp.com/send?phone=5491155086946&text=Hola!%20Vi%20tu%20sitio%20web%20sobre%20métodos%20de%20estudio%20y%20quisiera%20saber%20más!" target="_blank"><i class="fab fa-whatsapp fa-1x" aria-hidden="true"></i><p class="d-none">WhatsApp</p></a></li>
                    </ul>          
                </div>
            </div>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>