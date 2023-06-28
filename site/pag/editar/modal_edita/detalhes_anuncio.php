
<script src="ckeditor/ckeditor.js"></script>

<a href=""
data-bs-toggle='modal' 
       data-bs-target='#deta_anu'
       
       > <i class="bi bi-pencil-square"></i></a>
<div class='modal fade' id='deta_anu' tabindex='-1' aria-labelledby='deta_anu' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Editar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

         <br>        
<form action="pag/editar/editar_bd/edita_bd.php" method="POST">  

<h5 class='modal-title' id='exampleModalLabel'style="text-align: center;">Detailhes do anuncio</h5>



 <textarea cols='10' rows='5'  class='form-control' id="detalhes" name="detalhes" placeholder="Digite aqui a descrição com o macimo pocivel de detailhes." required><?=$detalhes ?></textarea><br>



  <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ed_detalhes' id="bt_ed_detalhes<?=$id_ap?>" value="<?=$id_an?>">Salvar</button>
         
       <p></p> 
      
       </form>
        <button type='button' class='w-100 btn btn-secondary' data-bs-dismiss='modal' >Cancelar</button>
        <p></p>





        
        </div><?php //tem eros en outro modais que foi resolvido neste é uma </div> 
        ?>
      </div>
    </div>

  
    <script>
        // Inicializando o CKEditor
        CKEDITOR.replace('detalhes', {
    removeButtons: 'Save,NewPage'
});
    </script>