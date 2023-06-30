



<div class='modal fade' id='logrr' tabindex='-1' aria-labelledby='logrr' aria-hidden='true'>
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Fazer login...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
      <form action="acoes/login.php" method="POST">   
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" name="email" placeholder="nome@example.com.br">
            <label for="floatingInput">Seu Email:</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="Password" name="senha" placeholder="Senha">
            <label for="floatingPassword">Sua Senha:</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"name="bt_entrar" type="submit">Entrar</button>
          <small class="text-body-secondary">Ou entre em contato através de nossas redes sociais.</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Redes sociais</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
          WhatsApp
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
             Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
         Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"/></svg>
           GitHub
          </button>
        </form>
<hr>
        <h2 class="fs-5 fw-bold mb-3">Entrar da forma antiga</h2>

        <a href='../paineis' class='w-10 btn btn-primary btn-purple btn-custom'
    
    data-bs-toggle='modal' 
       data-bs-target='#logrr2'
       >Entrar</a>
      </div>
    </div>
  </div>
</div>


<div class='modal fade' id='logrr2' tabindex='-1' aria-labelledby='logrr2' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header' style="z-index: 1;">
      <h5 class='modal-title' id='exampleModalLabel'>Entra no sistema</h5>
    
   
      <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
    </div>


<div class='modal-body' style="text-align: center; background-color: #00000015;  ">


</form>

<form action="acoes/login.php" method="POST">    
 

   
       
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

</form>

<div class='alert'>Não tem cadastro? <a class='btn btn-lg btn-warning' href='cadastrar-empresa.php'
data-bs-toggle='modal' 
       data-bs-target='#x_ifor'> Click aqui </a> </div>


<p class="mt-5 mb-3 text-muted"> Genilson Alves de Oliveira &copy; 2023</p>



</div></div>
      </div>
    </div>