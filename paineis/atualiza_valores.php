<?php





//pegar data e hora di sistema
 date_default_timezone_set('America/Sao_Paulo');
 $data = date("d/m/Y");
 $data_i = date("Y-m-d");
 $hora = date("H:i:s");
 $dia = date("d");
 $mes= date("m");
 $ano= date("Y");


 //pegar ip do servidor e transmformar em dominio DNS
 $ip = gethostbyname(gethostname());
 $url="http://<?= $ip; ?>/lojasor/paineis/";

  $_SESSION['DNS'] = $url;