


<?php

if(isset($_SESSION['mensagem_zap'])) {
    echo "
 
    <div  class='alert alert-".$_SESSION['status']." alert-dismissible fade show mensagem' role='alert' style='position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;  background-color: #ffffffec;color:black;border-radius:6px ; width: 90%;'>



      
            {$_SESSION['mensagem_zap']} <br>
            <span class='alert-warning'>".@$_SESSION['msg_upload']."</span>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div> ";
    // session_unset(); // DESTRUIR VARIAVEIS DE SESSAO
    unset($_SESSION['mensagem_zap']);
    unset($_SESSION['msg_upload']);
}
