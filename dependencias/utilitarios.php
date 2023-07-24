<?php
$servidor="192.168.15.18";
$nome="root";
$senha="root";
$bancoDeDados="mydb";
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