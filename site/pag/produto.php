
     
        <!-- Product section-->

        <?php
        $dns= $_SESSION['DNS']  ;
        $url =$dns. $_SERVER['REQUEST_URI'];
        ?>
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
                            <div class="text-center">

                             <?php 
                        $message = "Olá tudo bem?     %0A%20 << *Quero Comprar* >> %0A%20 *Produto:* _" . $descricao . "_ %0A%20 *Valor:* " . $valor_venda."%0A%20 *Link:* https://".$url;
                            ?>
                              
                              <a class="btn btn-outline-dark mt-auto" href="pag/?produto=<?=$id_ap ?>"
                            data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#comprar'
                >
                    <i class="bi-cart-fill me-1"></i>


Comprar</a>      <a class="btn btn-outline-dark mt-auto"  href='https://api.whatsapp.com/send/?text=https://<?=$url?>'target='_blank'




                           
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-capslock" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM14.346 8.5 8 1.731 1.654 8.5H4.5a1 1 0 0 1 1 1v1h5v-1a1 1 0 0 1 1-1h2.846zm-9.846 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1zm6 0h-5v1h5v-1z"/>
</svg>


Compartilhar</a>

<a class="btn btn-lg btn-info" href="perfil.php"
           style=" background-color:#006eff59;
           border-color:#006eff59; position: fixed; right: 0; top: 0.5%;z-index: 1;
           font-size: 12px; "
           data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#comprar'
                
                
                >  
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
        <section class="py-8 bg-light">
            <div class="container px-6 px-lg-10 mt-2">
                <h2 class="fw-bolder mb-4">Imagens reais 
                  
                  
                  
                  <?php if( $permi==1) {
                  

                  include "ajustes/add_imagem_real.php";
                 }?></h2>




                <div class="row gx-4 gx-lg-5 row-cols-6 row-cols-md-6 row-cols-xl-6 justify-content-center">
                    

<?php  

include "Comprar_modal.php";
 include "ler_bd/imagens_reais_lista.php";
?>



</div></div>










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













            



        </section>
  <?php
  //include "exemplo_modal_imag.php";?>
 
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

