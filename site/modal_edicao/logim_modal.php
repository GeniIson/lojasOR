



<div class='modal fade' id='logrr' tabindex='-1' aria-labelledby='logrr' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header' style="z-index: 1;">
      <h5 class='modal-title' id='exampleModalLabel'>Entra no sistema</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>


<div class='modal-body' style="text-align: center; background-color: #00000015;  ">


<form action="../paineis/" method="GET">

    
 

   
       
<img src="../imagens/logo.jpeg" alt="" style="height: 300px; margin-bottom: -90px; margin-top: -50px; z-index: 100; ">

<input type='hidden' name='url' value="<?=$url; ?>">



<div class="form-floating">
  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nome@example.com.br" autofocus>
  <label for="floatingInput">E-mail</label>
</div>







<div class="form-floating">
  <input type="password" class="form-control" id="Password" name="senha" placeholder="Senha">
  <label for="Password">Senha</label>
</div>


<button class="w-100 btn btn-lg btn-primary" type="submit" name="bt_entrar">Entrar</button>



<div class='alert'>Não tem cadastro? <a class='btn btn-lg btn-warning' href='cadastrar-empresa.php'
data-bs-toggle='modal' 
       data-bs-target='#x_ifor'> Click aqui </a> </div>


<p class="mt-5 mb-3 text-muted"> Genilson Alves de Oliveira &copy; 2023</p>
</form>


</div></div>
      </div>
    </div>