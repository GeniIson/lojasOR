<?php
    if (!isset($_SESSION)) {
        session_start();
      }           // iniciar sessao
    include "../../../config/conf_bd_or/conexao.php";
if(isset($_POST['bt_entrar'])) {
    // pegar os dados postados e fazer o escape
    $email = (mysqli_real_escape_string($con, $_POST['email']));
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));
   
    $url=0;//(mysqli_real_escape_string($con, $_POST['url']));
    

    // CONSULTAR NO BANCO DE DADOS
  //  $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha';";//aqui verifica np banco de dados se o banco posue exatamente este usuario com esta senha 

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";//aqui verifica np banco de dados se o banco posue exatamente 
    
    // EXECUTAR A INSTRUCAO SQL
    $resultado = mysqli_query($con, $sql);

    if(mysqli_affected_rows($con) > 0) {//aqui se o resutado da consulta for maior que 0 prenche os campos se fo menor nao pula pro else
        // CRIAR ARRAY ASSOCIATIVO COM O RESULTADO DA CONSULTA
        $dados     = mysqli_fetch_array($resultado);
        
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem']  = "Usuário logado com sucesso!";
        $_SESSION['status']    = "success";
        $_SESSION['idusuario'] = $dados['id'];
        $_SESSION['id_usuario']= $dados['id'];
        $_SESSION['nome']       = $dados['nome'];
        $_SESSION['email']     = $dados['email'];
        $_SESSION['permissoes_id']=$dados['id_permicao'];
        $_SESSION['foto']      ='x';// $dados['foto']; // para mostrar no painel
        $_SESSION['pg_status']     = 'todas';
        $_SESSION['pg_tela']     = 'painel';
        $_SESSION['pg_os']     = 'todas';
        
        $_SESSION['ID_emprersa']  = $dados['id_empresa'];

       
        if($url==0){
           
        $_SESSION['pagina-a']    =0;
        $_SESSION['pagina-servicos']    =0;
        header('Location:../');
    } 
        if($url!=0){
     
            
            $_SESSION['pagina-a']    =0;
            $_SESSION['pagina-servicos']    =0;
            header('Location:'.$url); // REDIRECIONAR PARA O PAINEL
        }
    } 
    else {
        // CRIAR VARIAVEIS DE SESSAO
        $_SESSION['mensagem'] = "Erro no login! Usuario ou senha incorretos";
        $_SESSION['status'] = "danger";
        header('Location: ../'); // REDIRECIONAR PARA O INDEX
    }
    mysqli_close($con); // fechar conexao
}
