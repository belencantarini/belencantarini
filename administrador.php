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
                <a class="nav-link active" href="administrador.php">Generar nuevo tratamiento</a>
                <a class="nav-link" href="confirmar_tratamiento.php">Pendientes de confirmacion</a>
                <button type="button" class="btn btn-outline-dark p-0"><a class="nav-link" href="salir.php">SALIR</a></button>    
            </nav>
            <div>
                <div>
                    <form name="administrarTratamientos" action="cargar_tratamiento.php" method="POST" enctype="multipart/form-data" class="container px-4 py-3 rounded-bottom bg-danger bg-opacity-25">
                        <div class="container"> 
                            <div class="row ">
                                <div class="col-8 ps-0"><input type="text" class="form-control " id="formTratamiento" name="tratamiento" placeholder="Tratamiento" required></div>
                                <div class="col-4 pe-0"><input type="number" class="form-control "  id="formTarifa" name="tarifa" placeholder="Tarifa" required></div>
                            </div>
                        </div>
                        <textarea class="form-control mt-3"  id="formDescripcion" name="descripcion" cols="30" rows="3" placeholder="Descripcion"></textarea>
                        <div class="d-flex my-3 gap-3">
                          <label class="cargarImagen" for="imageFile">Cargar imagen desde archivo<input type="file" name="archivo" id="imageFile" accept="image/png, image/gif, image/jpeg" class="d-none"></label><span class="m-auto" id="imageFileName">Ningún archivo seleccionado</span>
                          <button type="button" class="btn btn-pink" id="imageUrlBtn">Cargar imagen desde URL</button>
                          <input type="text" class="form-control w-50"  id="inputImageUrl" name="imagenUrl" placeholder="URL imagen" value="">
                        </div>
                        <div>
                          <img src="" alt="Image Preview" id="image" class="m-auto px-5 py-3 d-none img-thumbnail"  width="400">
                        </div>
                        <div class="d-flex justify-content-center p-3"><input class="btn btn-dark" type="submit" value="Cargar tratamiento"></input></div>
                    </form>
                </div>
            </div>
        </div>                
    </div>

  <!-- Modal form para manejo de imagenes desde la pc -->
  <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Adjuntar imagen desde archivo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="subir_imagen.php" method="post" enctype="multipart/form-data" id="uploadForm" >
          <div class="modal-body">
              <input type="file" name="archivo" id="imageFile">
              <input type="text" class="form-control"  id="urlImagen" name="url" placeholder="URL imagen">
          </div>
          <div>
            <img src="" alt="Image Preview" id="image" class="w-100 px-5 py-3 d-none">
          </div>
          <div class="modal-footer">
            <input type="submit" name="submit" class="btn btn-pink" value="Subir imagen"></input>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div> -->


  <script>
    const inputImage = document.getElementById("imageFile");
    const inputImageName = document.getElementById("imageFileName");
    const previewImage = document.getElementById("image");
    const imageUrlBtn = document.getElementById("imageUrlBtn");
    const inputImageUrl = document.getElementById("inputImageUrl");

    inputImage.addEventListener("change", function(){
      const file = this.files[0];
      if(file) {
        const reader = new FileReader();
        reader.addEventListener("load", function(){
          previewImage.setAttribute("src", this.result);
          imageExists(previewImage.src).then(function(){console.log("me encanta")});
          previewImage.classList.add('d-block');
          previewImage.classList.remove('d-none');
          inputImageName.innerText = file.name;
          inputImageUrl.value = "";
        });
      reader.readAsDataURL(file);
      } else {
        previewImage.setAttribute("src", "");
        previewImage.classList.add('d-none');
        previewImage.classList.remove('d-block');
        inputImageName.innerText = "Ningún archivo seleccionado";
        inputImage.value = "";
      }
    });

    imageUrlBtn.addEventListener("click", function(){
      if(inputImageUrl.value) {
        imageExists(inputImageUrl.value).then(function(){
        //It exists
        console.log("me encanta");
        previewImage.setAttribute("src", inputImageUrl.value);
        previewImage.classList.add('d-block');
        previewImage.classList.remove('d-none');
        inputImageName.innerText = "Ningún archivo seleccionado";
        inputImage.value = "";
        }).catch(function(){
        //It does not exist
        console.log("terrible");
        })}})

      
      //   else {
      //   previewImage.setAttribute("src", "");
      //   previewImage.classList.add('d-none');
      //   previewImage.classList.remove('d-block');
      //   inputImageName.innerText = "Ningún archivo seleccionado";
      //

function imageExists(imageSrc) {
  return new Promise(function(resolve,reject){
  let img = new Image();
  img.src = imageSrc;
  img.onload = resolve;
  img.onerror = reject;
    })}


  </script>

    <?php
        function tratamientoCargado (){
          echo "<h2 class='text-center py-3'> Tratamiento cargado con exito.</h2>";
          echo "<h3 class='text-center py-3'> Dirigirse a la pestaña de tratamientos 'Pendientes de confirmación' para previsualizar el tratamiento cargado y finalizar el proceso de carga.</h3>";
        }

        if (isset($_GET['ok'])) {
            tratamientoCargado();
        }
      
    ?>

</section>
</main>
<?php include('footer.php');
} 
else{
  header("Location:login.php");
}
?> 