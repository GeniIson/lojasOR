
     
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../../arquivos_fixos_importante_or/capas/<?=$capa_arquivo?>"alt="<?=$id_an?>" /></div>
                    <div class="col-md-6" >
                   
                        <div class="small mb-1">Estoque:1</div>
                        <h1 class="display-5 fw-bolder"><?=$descricao?></h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through" style="font-size: 16px;">R$<?=$valor_novo?></span>
                            <span style="font-size: 25px;" >R$<?=$valor_venda?></span>
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="pag/?produto=<?=$id_ap ?>">
                    <i class="bi-cart-fill me-1"></i>


Comprar</a>

<a class="btn btn-lg btn-info" href="perfil.php"
           style=" background-color:#006eff59;
           border-color:#006eff59; position: fixed; right: 0; top: 0.5%;z-index: 1;
           font-size: 12px; ">  
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
         Comprar</a>


</div>
                        </div>
                        
                        <p class="lead"><?=$detalhes ?></p>


                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Imagens reais <?php if( $permi==1) {
                  

                  include "ajustes/add_imagem_real.php";
                 }?></h2>




                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    

<?php  


 //include "ler_bd/imagens_reais_lista.php";
?>



            
</div> </div>


        </section>
     
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <style>
     .overlay {
   
        background-color: #00000025;/* Cor de fundo semi-transparente */
    z-index: 9999; /* Z-index maior que o conteúdo do modal */
  }

  /* Resto do código... */

  .modal-footer.fixed-bottom {
    position: sticky;
   
    z-index: 1;
  }

  .modal-dialog.modal-dialog-scrollable {
    max-width: 95%;
    height: 90%;
 
  }

  .modal-content {
    height: 100%;
  }

  .modal-body {
    height: calc(100% - 56px - 56px); /* altura da modal-header e modal-footer */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .zoom-container {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .zoom-container img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    transform-origin: top left;
    transition: transform 0.3s;
    user-select: none;
    cursor: pointer;
  }
</style>
<style>
  /* Resto do código... */

  .zoom-container {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-x: auto; /* Adiciona barra de rolagem horizontal */
    overflow-y: auto; /* Adiciona barra de rolagem vertical */
  }
</style>

<style>
  /* Resto do código... */

  .modal-footer.fixed-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1;
  }
</style>
</head>

<body>
  <div class="container">
    <h1>Bootstrap Modal Example</h1>

    <div class="row">
      <div class="col-md-4">
        <a href="#" data-toggle="modal" data-target="#imagemModal">
        <img src="../../../arquivos_fixos_importante_or/imagens_anuncio_reais/<?=$capa_arquivo?>" alt="Imagem 1" class="img-fluid draggable">
         </a>
      </div>
      <div class="col-md-4">
        <a href="#" data-toggle="modal" data-target="#imagemModal2">
        <img src="../../../arquivos_fixos_importante_or/imagens_anuncio_reais/<?=$capa_arquivo?>" alt="Imagem 1" class="img-fluid draggable">
          </a>
      </div>
      <div class="col-md-4">
        <a href="#" data-toggle="modal" data-target="#imagemModal3">
        <img src="../../../arquivos_fixos_importante_or/imagens_anuncio_reais/<?=$capa_arquivo?>" alt="Imagem 1" class="img-fluid draggable">
          </a>
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div class="modal fade" id="imagemModal" tabindex="-1" role="dialog" aria-labelledby="imagemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header overlay">
          <button type="button" class='btn-close' data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div></div>
          <div class="zoom-container">
            <img src="" alt="" id="imagemModalImg" class="img-fluid draggable">
          </div>
        </div>
        <div class="modal-footer fixed-bottom">
          <button type="button" class='btn' id="zoomInBtn"><i class="bi bi-zoom-in"></i></button>
          <button type="button" class='btn' id="zoomOutBtn"><i class="bi bi-zoom-out"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="imagemModal2" tabindex="-1" role="dialog" aria-labelledby="imagemModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header overlay">
          <button type="button" class='btn-close' data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div></div>
          <div class="zoom-container">
            <img src="" alt="" id="imagemModal2Img" class="img-fluid draggable">
          </div>
        </div>
        <div class="modal-footer fixed-bottom">
          <button type="button" class='btn' id="zoomInBtn2"><i class="bi bi-zoom-in"></i></button>
          <button type="button" class='btn' id="zoomOutBtn2"><i class="bi bi-zoom-out"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal fade" id="imagemModal3" tabindex="-1" role="dialog" aria-labelledby="imagemModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header overlay">
          <button type="button" class='btn-close' data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div></div>
          <div class="zoom-container">
            <img src="" alt="" id="imagemModal3Img" class="img-fluid draggable">
          </div>
        </div>
        <div class="modal-footer fixed-bottom">
          <button type="button" class='btn' id="zoomInBtn3"><i class="bi bi-zoom-in"></i></button>
          <button type="button" class='btn' id="zoomOutBtn3"><i class="bi bi-zoom-out"></i></button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      var zoomLevel = 100;
      var isDragging = false;
      var startPosX = 0;
      var startPosY = 0;
      var startTranslateX = 0;
      var startTranslateY = 0;

      function zoomIn() {
        zoomLevel += 10;
        $('.zoom-container img').css('transform', 'scale(' + zoomLevel / 100 + ')');
      }

      function zoomOut() {
        if (zoomLevel > 10) {
          zoomLevel -= 10;
          $('.zoom-container img').css('transform', 'scale(' + zoomLevel / 100 + ')');
        }
      }

      function startDragging(e) {
        if (e.which === 1) {
          isDragging = true;
          startPosX = e.clientX;
          startPosY = e.clientY;
          var image = $(this);
          var matrix = new WebKitCSSMatrix(image.css('-webkit-transform'));
          startTranslateX = matrix.m41;
          startTranslateY = matrix.m42;
        }
      }

      function stopDragging() {
        isDragging = false;
      }

    // Função para mover a imagem arrastando
function moveImage(e) {
  if (isDragging && $(e.target).parents('.modal-dialog').length > 0) {
    var deltaX = e.clientX - startPosX;
    var deltaY = e.clientY - startPosY;
    var image = $('.zoom-container img');
    var translateX = startTranslateX + deltaX;
    var translateY = startTranslateY + deltaY;
    image.css('transform', 'scale(' + zoomLevel / 100 + ') translate(' + translateX + 'px, ' + translateY + 'px)');
  }
}

      $('.modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var imageSrc = button.find('img').attr('src');
        var modal = $(this);
        modal.find('.zoom-container img').attr('src', imageSrc);
        zoomLevel = 100;
        $('.zoom-container img').css('transform', 'scale(1)');
        $('.zoom-container img').css('transform', 'translate(0, 0)');
      });

      $('#zoomInBtn').click(zoomIn);
      $('#zoomOutBtn').click(zoomOut);
      $('#zoomInBtn2').click(zoomIn);
      $('#zoomOutBtn2').click(zoomOut);
      $('#zoomInBtn3').click(zoomIn);
      $('#zoomOutBtn3').click(zoomOut);
      $('.draggable').mousedown(startDragging);
      $('.draggable').mouseup(stopDragging);
      $('.draggable').mousemove(moveImage);
    });
  </script>

 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

