



<a href=""
data-bs-toggle='modal' 
       data-bs-target='#cap_anu'
       
       > <i class="bi bi-pencil-square"></i></a>




    <div class='modal fade' id='cap_anu' tabindex='-1' aria-labelledby='cap_anu' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Editar:</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>



   

    

    <p>Escolha uma capa para ser apresentada</p>

    <div class='modal-body'>
 

   
           
    <div class="container px-4 px-lg-5 mt-5">

    <form action="pag/editar/editar_bd/edita_bd.php" method="POST">  
               
                <?php  
    include "../paineis/ler_no_bd/capas_para_uso.php";
    ?>   
                   
                   </div>
      
   
  
         
           
         </div>
         
         
          <p></p>
          <input type='hidden'  name='id_detalhes' value="<?=$id_an?>" />

       </form>
       <button type='button' class='w-100 btn btn-secondary' data-bs-dismiss='modal' >Cancelar</button>
        <p></p>

        
        </div>
      </div>
    </div>


      