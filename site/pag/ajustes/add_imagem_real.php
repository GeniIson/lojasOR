<a 
  
       href="#"
       
       data-bs-toggle='modal' 
       data-bs-target='#add_imag'
       
       >
<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-sign-intersection" viewBox="0 0 16 16">
  <path d="M7.25 4v3.25H4v1.5h3.25V12h1.5V8.75H12v-1.5H8.75V4h-1.5Z"/>
  <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435Zm-1.4.7a.495.495 0 0 1 .7 0l6.516 6.515a.495.495 0 0 1 0 .7L8.35 14.866a.495.495 0 0 1-.7 0L1.134 8.35a.495.495 0 0 1 0-.7L7.65 1.134Z"/>
</svg></a>













<div class='modal fade' id='add_imag' tabindex='-1' aria-labelledby='add_imag' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Adcionar uma imagem real do aparelho anunciado</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
  
    <form action='pag/ajustes/nova_imagem_bd.php' method="POST" enctype="multipart/form-data">
    

  

    <div class='modal-body' style="font-size: 16px;">
         
          
    
         <label for='valor2' class='form-check-label'>Escolha uma Imagem ou tire uma foto</label>
    
    
         <input type="file" name="foto" id="foto" value="" />
         <p></p>
         <label for='descricao' class='form-check-label'>Descrição</label>
    
    
    <input type='text' id="descricao" class='form-control'  name='descricao' placeholder='Ex:Frente'>
  
        
        
           
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok_compra' id="bt_ok_compra" value='1'>Salvar</button>
         
          <p></p>

         
          <input type='hidden' id='salvar_capa' name='salvar_imag' value='' />
          <input type='hidden' id='id_impresa' name='id_impresa' value='<?=$_SESSION['ID_emprersa']?>' />
          <input type='hidden' id='id_anuncio' name='id_anuncio' value='<?=$id_an?>' />

       </form>
      

        
        </div>
      </div>
    </div>







