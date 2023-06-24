

   
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



      <?php
      // Simulação de obtenção das URLs das imagens do banco de dados
      $imageUrls = [
        "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/$nome_arquivo",
       
       
        // Adicione mais URLs das imagens aqui
      ];
      
      // Loop para criar os blocos de imagem
      for ($i = 0; $i < count($imageUrls); $i++) {
        $imageId = $i + 1;}
        $modalId = "imagemModal" . $imageId;
        $zoomInBtnId = "zoomInBtn" . $imageId;
        $zoomOutBtnId = "zoomOutBtn" . $imageId;
        $imageSrc = "../../../arquivos_fixos_importante_or/imagens_anuncio_reais/$nome_arquivo";
        ?>






<div class="col mb-2">
                       
                       <?php if( $permi==1) {
                     
   
                     include "apaga_imagem_real.php";
                    }?>
                                                  
                    
                     
             
          <a href="#" data-toggle="modal" data-target="#<?= $modalId ?>">
            <img src="<?= $imageSrc ?>" alt="Imagem <?= $imageId ?>" class="img-fluid draggable">
          </a>
          


        <!-- Modal -->
        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
              <div class="modal-header overlay">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               
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
          </div></div>
        


