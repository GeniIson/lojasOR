<?php
 if (!isset($_SESSION)) {
    session_start();
  }
  include "../../../config/conf_bd_or/conexao.php";

    if(isset($_GET['bt_ok'])) {

    $name  =mysqli_real_escape_string($con, $_GET['name']);
    $name = ucfirst($name );
    //dexa so a primeira letra em mausculo
     
    $descricao = $_GET['message'];
    // Obtém o valor da variável 'message' através do método GET e atribui-o à variável $descricao
    
    $descricao = str_replace("\n", '%0A%20',  $descricao);
    // Substitui todas as ocorrências de quebras de linha (\n) por %0A%20
    // Isso pode ser útil ao construir uma URL que contém a descrição e garantir que as quebras de linha sejam interpretadas corretamente
    
    $descricao = addslashes(htmlspecialchars($descricao));
    // Aplica as funções addslashes e htmlspecialchars à variável $descricao
    // addslashes adiciona barras invertidas antes de caracteres especiais, protegendo contra possíveis injeções de SQL
    // htmlspecialchars converte caracteres especiais em entidades HTML, evitando problemas de segurança e preservando a formatação correta ao exibir o valor em um contexto HTML
    
    $descricao= ucfirst($descricao);
//dexa so a primeira letra em mausculo

    $valor  =mysqli_real_escape_string($con, $_GET['valor45']);

    $message = "Olá tudo bem?     %0A%20 >> *Quero vender* << %0A%20 *Nome:* _" . $name . "_ %0A%20 *Descrição:* " . $descricao . " %0A%20 *Valor:* " . $valor;
    $_SESSION['mensagem_zap'] = " 

     
   
  
    
    <div class='modal-dialog' >
    <div class='modal-content'>
      <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Quero vender</h5>
       
      </div>

      
   
   

    

  

    
      <div class='modal-body'style='margin: 10px;'>
      <h5 class='modal-title' id='exampleModalLabel'style='text-align: center;'>Muito obrigado pelas respostas!</h5>
      <p>Você vai ser direcionado para fazer negocio em nosso whatsapp e sera atendido por um de nossos compradores, não se esqueça de clicar enviar em seu watzap!</p>
      
        <p >Clique no botão abaixo para proseguir:</p>
        <a class='w-100 btn btn-primary btn-purple btn-custom'  href='https://api.whatsapp.com/send?phone=5587981492269&text=".$message."'target='_blank'>Abrir negociação no whatsapp</a>
       
      </div>
    </div>
    </div> ";
    $_SESSION['status']   = "black";

   header("Location: ../");

}
