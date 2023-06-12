<?php
   session_start();   


 //esta parte para inia e indentificar
 $_SESSION['ID_emprersa'] = '1';

//conctar ao banco de dados
include "../conf_bd/conexao.php";
//atualizar valores
include "atualiza_valores.php";

//paine que mostara as funções
include "painel.php";
//modais para enserir os dados 
include "modais/ijeta_captal.php";include "modais/cadastra_usuario.php";
include "modais/compra_aparelho.php";
include "modais/cadastra_empresa.php";
include "modais/vender_imformativo.php";
