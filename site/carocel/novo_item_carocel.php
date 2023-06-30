   
  <span style=' float:right;z-index: 120;
  margin:-100;'>
 <a href=""
 
 data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#novo_caricel'
 
 ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
  <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
  <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z"/>
</svg></a>
    
    
</span>


<br>


<div class='modal fade' id='novo_caricel' tabindex='-1' aria-labelledby='novo_caricel' aria-hidden='true'>
<div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p>This is a modal sheet, a variation of the modal that docs itself to the bottom of the viewport like the newer share sheets in iOS.</p>
      </div>
      <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
        <button type="button" class="btn btn-lg btn-primary">Save changes</button>
        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class='modal fade' id='novo_caricel2' tabindex='-1' aria-labelledby='novo_caricel2' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header' >
      <h5 class='modal-title' id='exampleModalLabel'>Adicionar novo item no carocel</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
  

      </div>
      <div style="margin: 6px;">


         
        
         
         
<p >Clique no botão abaixo para realizar a compra segura:</p>

</div>
        <a class='w-100 btn btn-primary btn-purple btn-custom'  href='https://api.whatsapp.com/send?phone=5587981492269&text=<?=$message?>'target='_blank'>Proseguir com a compra no whatsapp</a>
         
          
        <p></p>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
        <br>

    


        </div> 
        
        </div>
      </div>
    </div>

    <div class='modal fade' id='comprar1' tabindex='-1' aria-labelledby='comprar1' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header' >
      <h5 class='modal-title' id='exampleModalLabel'>Quero vender</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

    

    <h5 class='modal-title' id='exampleModalLabel'style="text-align: center;">Responda 3 perguntas simples.</h5>
<p></p>


   
  
         
        
         
         
          <a class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'
             
    data-bs-toggle='modal' 
       data-bs-target='#comprar2'
       
       >Ok</a>
         
          
        <p></p>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancela</button>
        <br>

    


        </div> 
        
        </div>
      </div>
    </div>


    <div class='modal fade' id='comprar2' tabindex='-1' aria-labelledby='comprar2' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Quero comprar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

    
   
  
    <h5 class='modal-title' id='exampleModalLabel'style="text-align: center;">Qual é seu nome?</h5>
<p></p>
         
        
<form action="modal_sit/emviar_no_zap_vender.php" method="GET">    
  
  <input type="text" id="name" name="name" class='form-control' placeholder="Digite aqui seu nome"><br>


 

 
  <a class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'
             
             data-bs-toggle='modal' 
                data-bs-target='#comprar3'
                
                >Avansar</a>

        <p></p>
        <a class='w-100 btn btn-secondary' data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#vender_m1'>Voltar</a>
   <p></p>

    


        </div> 
        
        </div>
      </div>
    </div>


    <div class='modal fade' id='comprar3' tabindex='-1' aria-labelledby='comprar3' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Quero comprar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

    

    <h5 class='modal-title' id='exampleModalLabel'style="text-align: center;">Qual Aparelho quer vende?</h5>
<p></p>


 <textarea cols='10' rows='5'  class='form-control' id="message" name="message" placeholder="Digite aqui a descrição com o macimo pocivel de detailhes." required></textarea><br>

         
        
         
 <a class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'
             
             data-bs-toggle='modal' 
                data-bs-target='#comprar4'
                
                >Avansar</a>

          

          
        <p></p>
        <a class='w-100 btn btn-secondary' data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#vender_m2'>Voltar</a>
   <p></p>

    


        </div> 
        
        </div>
      </div>
    </div>

    
    <div class='modal fade' id='comprar4' tabindex='-1' aria-labelledby='comprar4' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Quero comprar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>

    

    <h5 class='modal-title' id='exampleModalLabel'style="text-align: center;">Por quanto mais ou menos você que vender?</h5>
<p></p>

<input type='number'  class='form-control' step='0.01'  min='0' id="valor34" name='valor45' placeholder='0,00'>
         
        <p></p>
         
     
      
     
      
      
       <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok' id="bt_ok" value='1' data-bs-dismiss='modal'>Avansar</button>

       
</form>
       
 

          
        <p></p>
        <a class='w-100 btn btn-secondary' data-bs-dismiss='modal'
        data-bs-toggle='modal' 
                data-bs-target='#vender_m3'>Voltar</a>
   <p></p>

    


        </div> 
        
        </div>
      </div>
    </div>


     

<script src="../assets/js/bootstrap.bundle.min.js"></script>
