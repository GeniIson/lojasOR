<?php
       function gerarNovoToken()
       {
           return bin2hex(random_bytes(32));
       }
       $_SESSION['csrf_token'] = gerarNovoToken();
   

        ?>