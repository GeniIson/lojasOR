



<div class='modal fade' id='cadastra_usuario' tabindex='-1' aria-labelledby='cadastra_usuario' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Cadastra um novo usuario </h5>
          
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>
    
    <form id="meu-formulario555555" action='gravar_no_bd/cadastra_usuario_bd.php' method='POST'>

    

  

    <div class='modal-body'>
 
    <span style=' float:right;'>
   
    <label for='data_inicial' class='form-label'>Data do cadastro</label>
        
          
    <input type='date' class='form-check-label' id='data_inicial'name='data_inicial' value='<?=$data_i?>'>
      </span>
    
   

   <label for='cargo_uso' class='form-check-label'>Cargo</label>
   
   
   <input type='text' id="cargo_uso" name="cargo_uso" class='form-control' placeholder='Ex:Gerente'required>
   
   

   <label for='nome_uso' class='form-check-label'>Nome completo</label>
   
   
   <input type='text' id="nome_uso" name="nome_uso" class='form-control' placeholder='Ex:José da Silva'required>
  
    
    <label for='contato' class='form-check-label'>Contato</label>
    
    
    <input type='text' id="contato" name="contato" class='form-control' placeholder='Ex: 87 9888888'required>
    <br>
    <label for="email"class='form-check-label'>E-mail</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="email" name="email" placeholder="email@provedor.com" required>
        <div class="invalid-feedback">
            Digite o seu e-mail.
          </div>
        </div>
        <label for="senha" class='form-check-label'>Senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
        <div class="invalid-feedback">
            Digite uma senha.
          </div>
        </div>
        <label for="senha2" class='form-check-label'>Confirme a senha</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha2" name="senha2" placeholder="" required>
        <div class="invalid-feedback">
            Digite uma senha.
          </div>
        </div>

        <label for='permi_a' class='form-check-label'><strong style='text-align: left; font-size: 14px';>Permiçoes</strong></label>
      
      <select class='form-select'id='permi_a' name='permi_a' required>
      <option value='0'></option>
          <option value='1'>Adm</option>
          <option value='2'>Comun</option>
        
          
        </optgroup>
      </select><br>
    
     
         </div>
          <button type='submit'class='w-100 btn btn-primary btn-purple btn-custom' name='bt_ok555' id="bt_ok555" value='1'>Salvar cadastro</button>
         
          <p></p>

         
          <input type='hidden' id='bt_cadstra_imp' name='bt_cadstra_uso' value='' />
     
          <input type='hidden'  name='id_impresa' value='<?= $idimpresa ?>' />
       </form>
       <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Voltar</button>
        <p></p>
        </div> 
        
        </div>
      </div>
    </div>








<script src="../assets/js/bootstrap.bundle.min.js"></script>
