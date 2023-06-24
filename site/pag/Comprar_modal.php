<div class='modal fade' id='comprar' tabindex='-1' aria-labelledby='comprar' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header' >
      <h5 class='modal-title' id='exampleModalLabel'>Quero Comprar</h5>
   
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
  

      </div>
      <div style="margin: 6px;">



   
      

<h5 class='modal-title' id='exampleModalLabel'style="text-align: center; color:blue;">Nossas vendas são 100% humanizadas!</h5>
<p></p>
         
        
         
         
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


