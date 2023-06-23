



                    <div class="col mb-5">
                       
                    <?php if( $permi==1) {
                  

                  include "apaga_imagem_real.php";
                 }?>
                        <a href="">   <img class="card-img-top" src="../../../arquivos_fixos_importante_or/imagens_anuncio_reais/<?=$nome_arquivo?>" alt="<?=$descricao?>" /></a> 
                          
                       
                        
                    </div>
                  
          

                    
        <div class="container">
  <h1>Bootstrap Modal Example</h1>

  <div class="row">
    <div class="col-md-4">
      <a href="#" data-toggle="modal" data-target="#imagemModal">
        <img src="../../../arquivos_fixos_importante_or/imagens_anuncio_reais/<?=$nome_arquivo?>" alt="Imagem 1" class="img-fluid draggable">
      </a>
    </div>
    <!-- Resto do código... -->
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="imagemModal" tabindex="-1" role="dialog" aria-labelledby="imagemModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content" >
      <div class="modal-header  overlay" >

        
        <button type="button" class='btn-close' data-dismiss="modal" aria-label="Close">
          
        </button>
       
      </div>
      <div class="modal-body" >
      <div ></div>
        <div class="zoom-container " >
          <img src="" alt="" id="imagemModalImg" class="img-fluid draggable">
        </div>
      </div>
      <div class="modal-footer fixed-bottom">
       
      <button type="button" class='btn' id="zoomInBtn" ><i class="bi bi-zoom-in"></i></button>
        <button type="button" class='btn' id="zoomOutBtn"><i class="bi bi-zoom-out"></i></button>
      </div>
    </div>
  </div>
</div>

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
<script>
  $(document).ready(function() {
    var zoomLevel = 100; // Nível de zoom inicial
    var isDragging = false;
    var startPosX = 0;
    var startPosY = 0;
    var startTranslateX = 0;
    var startTranslateY = 0;

    // Função para aumentar o zoom
    function zoomIn() {
      zoomLevel += 10; // Aumenta o nível de zoom em 10%
      $('.zoom-container img').css('transform', 'scale(' + zoomLevel / 100 + ')');
    }

    // Função para diminuir o zoom
    function zoomOut() {
      if (zoomLevel > 10) {
        zoomLevel -= 10; // Diminui o nível de zoom em 10%
        $('.zoom-container img').css('transform', 'scale(' + zoomLevel / 100 + ')');
      }
    }

    // Função para iniciar o arrastar da imagem
    function startDragging(e) {
      if (e.which === 1) { // Verifica se o botão esquerdo do mouse está pressionado
        isDragging = true;
        startPosX = e.clientX;
        startPosY = e.clientY;
        var image = $('.zoom-container img');
        var matrix = new WebKitCSSMatrix(image.css('-webkit-transform'));
        startTranslateX = matrix.m41;
        startTranslateY = matrix.m42;
      }
    }

    // Função para parar o arrastar da imagem
    function stopDragging() {
      isDragging = false;
    }

    // Função para mover a imagem arrastando
    function moveImage(e) {
      if (isDragging) {
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
      var imagemSrc = button.find('img').attr('src');
      var modal = $(this);
      modal.find('#imagemModalImg').attr('src', imagemSrc);
      zoomLevel = 100; // Reseta o nível de zoom ao abrir o modal
      $('.zoom-container img').css('transform', 'scale(1)'); // Define o nível de zoom inicial
      $('.zoom-container img').css('transform', 'translate(0, 0)');
    });

    $('#zoomInBtn').click(zoomIn);
    $('#zoomOutBtn').click(zoomOut);
    $('.draggable').mousedown(startDragging);
    $('.draggable').mouseup(stopDragging);
    $('.draggable').mousemove(moveImage);
  });