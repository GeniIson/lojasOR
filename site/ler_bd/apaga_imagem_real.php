<span style=' float:right;z-index: 1;
  margin:-100;'>
<a 
  
       href="#"
       
       data-bs-toggle='modal' 
       data-bs-target='#apaga_imag<?=$id_f?>'
       
       >
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>
</span>

<div class='modal fade' id='apaga_imag<?=$id_f?>' tabindex='-1' aria-labelledby='apaga_imag<?=$id_f?>' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Apagr a  imagem real: <?=$descricao?></h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
  
    <form action='pag/ajustes/apaga_imagem_bd.php' method="POST" enctype="multipart/form-data">
    

  

    <div class='modal-body' style="font-size: 16px;">
         
        
  <p>Essa ação é irreversível!</p>
  <p>Tem serteza?</p>
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' style="border-color:red; background-color: red;" name='bt_ok_compra' id="bt_ok_compra" value='1'>Sim</button>
         
          <p></p>

         
          <input type='hidden' id='nome_imag' name='nome_imag' value='<?=$nome_arquivo?>' />
          <input type='hidden' id='apaga_capa' name='apaga_imag' value='' />
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?=$_SESSION['ID_emprersa']?>' />
          <input type='hidden' id='id_anuncio' name='id_anuncio' value='<?=$id_an?>' />

       </form>
      
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Não</button>
        <br>
        </div>
      </div>
    </div>







