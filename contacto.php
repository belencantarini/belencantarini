    <?php include('header.php');?>
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

                    function mensajeEnviado (){
                        echo "<h3 class='text-center pt-3'> Hola! Tu mensaje fue enviado con exito!! </br>Te responderemos a la brevedad al mail proporcionado, muchas gracias por contactarte.</h3>";
                    }

                    if (isset($_GET['exito_envio'])) {
                        mensajeEnviado();
                    }
                
                ?>
        </section>
    </main>
    <?php include('footer.php');?>