<?php
include_once("utilitarios.php");

$mysql->query("DELETE * FROM Cliente");
$login=true;
$fbotao=filter_input(INPUT_POST,"botaoConfirmar",FILTER_DEFAULT);
if($fbotao=="sair"){
  popup("saiu");
unset($_SESSION['id']);
}
//checando se o botão de confirmar foi apertado.
$erro=false;
//checa se o botão confirmar foi apertado.
if(isset($fbotao)){
$formulario=filter_input_array(INPUT_POST,FILTER_DEFAULT);
//identificando informações do formulario
//-------------------------------
$fusuario=filter_input(INPUT_POST,"usuario",FILTER_DEFAULT);

$fsenha=filter_input(INPUT_POST,"senha",FILTER_DEFAULT);

//vendo se usuario vai entrar com email ou senha.
if($fbotao=="entrar"){

if(in_array('',$formulario)){
  $erro=true;
  popup("todos os campos devem ser preenchidos");
}
elseif(strpos($fusuario,"@")){
    $query="SELECT * FROM Cliente WHERE email='$fusuario' LIMIT 1";

}else{
  
  if(is_numeric($fusuario)){
$query="SELECT * FROM Cliente WHERE CPF='$fusuario' LIMIT 1";
 

  }else{
    popup("cpf/email não está registrado");
    $erro=true;
   
  }
}
//-----------------------------
if(!$erro){
  

//aqui checa se o usuario existr,caso o usuario seja encontrado, vai carregar a sessão.

if($mysql->query($query)){
$tabela=mysqli_fetch_assoc($mysql->query($query));
//verificação de senha
if(password_verify($fsenha,$tabela['senha'])){
  //login bem sucedido
  
  $_SESSION['id']=$tabela['idCliente'];
  
header("Location:init.php");
ob_flush();
}
else{
 //login mal sucedido
  popup("senha incorreta!");
}
//fim da verificação de senha
}//fim da verificação se usuario existe.
}//fim da detecção de erro.
}//fim dos eventos da interface login.
//eventos da interface registro
elseif($fbotao=="cadastrar"){
if(in_array('',$formulario)){
  $erro=true;
  popup("todos os campos devem ser preenchidos");
}
elseif(($mysql->query($query="SELECT idCliente FROM Cliente WHERE email='".$formulario['email']."' LIMIT 1"))->num_rows!=0){
 
popup("email ja cadastrado");
$erro=true;
 

  }
  elseif(($mysql->query("SELECT idCliente FROM Cliente WHERE CPF='".$formulario['CPF']."' LIMIT 1"))->num_rows!=0){
      popup("cpf já está registrado");
      var_dump($_POST);
  
  }
  else{
   
    $cripto=password_hash($formulario['senha'],PASSWORD_DEFAULT);
    $query="	INSERT INTO `Cliente` (`idCliente`, `nome`, `CPF`, `senha`, `email`) VALUES (NULL, '".$formulario['nome']."', '".$formulario['CPF']."', '".$cripto."', '".$formulario['email']."'
    							)";


   $mysql->query($query);
   if(mysqli_insert_id($mysql)){
    
     popup("cadastrado com sucesso");
   }
  }

}//fim do evento cadastrar
}//fim da checagem do botao apertado.
?>