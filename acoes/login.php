<?php
 ///   session_start();            // iniciar sessao
    require_once '../conf_bd/conexao.php'; // chamar conexao 

if(isset($_POST['bt_entrar'])) {
    // pegar os dados postados e fazer o escape
    $email = (mysqli_real_escape_string($con, $_POST['email']));
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
   
   // $empresa =(mysqli_real_escape_string($con, $_POST['empresa']));
    $url=(mysqli_real_escape_string($con, $_POST['url']));
    
    

    // CONSULTAR NO BANCO DE DADOS
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";//aqui verifica np banco de dados se o banco posue exatamente este usuario com esta senha 

   // $sql = "SELECT * FROM usuarios WHERE email = '$email';";//aqui verifica np banco de dados se o banco posue exatamente 
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) > 0) {//aqui se o resutado da consulta for maior que 0 prenche os campos se fo menor nao pula pro else
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
     
        $_SESSION['idusuario'] = $dados['idUsuarios'];
        $_SESSION['nome']       = $dados['nome'];
        $_SESSION['email']     = $dados['email'];
        $_SESSION['permissoes_id']=$dados['permissoes_id'];
      

        
        $_SESSION['mensagem']  = $_SESSION['nome']." <h1>Bem vido!</h1>";
     
        function gerarNovoToken()
        {
            return bin2hex(random_bytes(32));
        }
        $_SESSION['csrf_token'] = gerarNovoToken();
    
        
     
            
            $_SESSION['pagina-a']    =0;
            $_SESSION['pagina-servicos']    =0;
            header('Location:'.$url); // REDIRECIONAR PARA O PAINEL
       
    } 
    else {

       // $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha';";//aqui verifica np banco de dados se o banco posue exatamente este usuario com esta senha 

         $sql4 = "SELECT * FROM usuarios WHERE email = '$email';";//aqui verifica np banco de dados se o banco posue exatamente 
         
         // EXECUTAR A INSTRUCAO SQL
         $resultado4 = mysqli_query($con, $sql4);
         $dados4     = mysqli_fetch_array($resultado4);
        $senha_ai=   $dados4['senha_ai'];
        $uso=   $dados4['idUsuarios'];
     
         if(mysqli_affected_rows($con) > 0 &&  $senha_ai=='') {
            
            
            // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "
        

        <form action='acoes/edita-senha.php' method='POST' class='needs-validation container' name='formuser' novalidate>
       <label for='nova_senha' class='form-label'>Email :{$email} </label>
       <p>Pode Digitar a senha antiga!</p> 
        <label for='nova_senha' class='form-label'>Nova Senha</label>
        <input type='password' class='form-control' id='nova_senha' name='nova_senha' placeholder='Digite aqui'>
       

   
        <label for='conf_senha' class='form-label'>Confirmação de Senha</label>
        <input type='password' class='form-control' id='conf_senha' name='conf_senha' placeholder='Digite aqui'>
        <button class='w-100 btn btn-primary btn-lg' type='submit' name='bt_ok_novasenha'>
      Ok
      </button>
      <input type='hidden' id='idusuario' name='idusuario' value='{$uso}'/>
     
        </form>";

        $_SESSION['status'] = "danger";
        header('Location: ../'); // RE'IRECIONAR PARA O INDEX
    
    }

             else{
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Erro no login! Usuario ou senha incorretos";
        $_SESSION['status'] = "danger";
        header('Location: ../'); // REDIRECIONAR PARA O INDEX
    }


    }
  
}
mysqli_close($con); // fechar conexao