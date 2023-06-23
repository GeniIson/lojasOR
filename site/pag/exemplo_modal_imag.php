   
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
      <?php
      // Simulação de obtenção das URLs das imagens do banco de dados
      $imageUrls = [
        "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/$capa_arquivo",
        "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/$capa_arquivo",
       
        // Adicione mais URLs das imagens aqui
      ];

      // Loop para criar os blocos de imagem
      for ($i = 0; $i < count($imageUrls); $i++) {
        $imageId = $i + 1;
        $modalId = "imagemModal" . $imageId;
        $zoomInBtnId = "zoomInBtn" . $imageId;
        $zoomOutBtnId = "zoomOutBtn" . $imageId;
        $imageSrc = $imageUrls[$i];
      ?>
        <div class="col-md-4">
          <a href="#" data-toggle="modal" data-target="#<?= $modalId ?>">
            <img src="<?= $imageSrc ?>" alt="Imagem <?= $imageId ?>" class="img-fluid draggable">
          </a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header overlay">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div></div>
                <div class="zoom-container">
                  <img src="" alt="" id="<?= $modalId ?>Img" class="img-fluid draggable">
                </div>
              </div>
              <div class="modal-footer fixed-bottom">
                <button type="button" class="btn" id="<?= $zoomInBtnId ?>"><i class="bi bi-zoom-in"></i></button>
                <button type="button" class="btn" id="<?= $zoomOutBtnId ?>"><i class="bi bi-zoom-out"></i></button>
              </div>
            </div>
          </div>
        </div>


        
      <?php } ?>




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
        var modalImg = modal.find('.zoom-container img');
        modalImg.attr('src', imageSrc);
        zoomLevel = 100;
        modalImg.css('transform', 'scale(1)');
      });

      // Adicione os event handlers dos botões de zoom para todos os modais
      for (var i = 1; i <= <?= count($imageUrls) ?>; i++) {
        var zoomInBtnId = '#zoomInBtn' + i;
        var zoomOutBtnId = '#zoomOutBtn' + i;
        $(zoomInBtnId).click(zoomIn);
        $(zoomOutBtnId).click(zoomOut);
      }

      $('.draggable').mousedown(startDragging);
      $(document).mouseup(stopDragging);
      $(document).mousemove(moveImage);
    });
  </script>