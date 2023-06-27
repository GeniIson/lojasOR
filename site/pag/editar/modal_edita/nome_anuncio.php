

<a href=""
data-bs-toggle='modal' 
       data-bs-target='#nome_anu'
       
       > <i class="bi bi-pencil-square"></i></a>
<div class='modal fade' id='nome_anu' tabindex='-1' aria-labelledby='nome_anu' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Editar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

         <br>        
<form action="modal_sit/emviar_no_zap_vender.php" method="GET">  
<h5 class='modal-title' id='exampleModalLabel'>Nome do anuncio:</h5>

  <input type="text" id="name_anucio" name="name_anucio" class='form-control '  value="<?=$descricao?>"><br>

         
          <a class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'
             
    data-bs-toggle='modal' 
       data-bs-target='#vender_m1'
       
       >Salvar</a>
         
       <p></p> 
      
        <button type='button' class='w-100 btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
        <p></p>

</form>



        
        </div><?php //tem eros en outro modais que foi resolvido neste é uma </div> 
        ?>
      </div>
    </div>