<?php
$servidor="sql200.infinityfree.com";
$nome="if0_34674594";
$senha="Vs5QFc8qslf";
$bancoDeDados="if0_34674594_barbearia";
$mysql=new mysqli($servidor,$nome,$senha,$bancoDeDados);
if($mysql->connect_error){
  die("houve um erro de conexão");
  }

unset($servidor,$nome,$usuario,$senha,$bancoDeDado);

function popup($mensagem){
 echo "<script>alert('".$mensagem."');</script>";
}
function checks($variavel){
  return isset($_SESSION[$variavel]);
  
}


?>