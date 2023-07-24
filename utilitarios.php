<?php
$servidor="sql200.infinityfree.com";
$nome="if0_34674594";
$senha="Vs5QFc8qslf";
$bancoDeDados="if0_34674594_barbearia";
$mysql=new mysqli($servidor,$nome,$senha,$bancoDeDados);
if ($mysql->connect_error) {
  die("Erro de conexão: " . $mysql->connect_error);
}



?>