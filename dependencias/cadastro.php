<?php
include_once("ultilitarios.php");

//checando se o botão de confirmar foi apertado.
if(isset($botaoConfirmar)){

//identificando informações do formulario
//-------------------------------
$fnome=filter_input(INPUT_POST,"nome",FILTER_DEFAULT);
$fCPF=filter_input(INPUT_POST,"CPF",FILTER_DEFAULT);
$ftelefone=filter_input(INPUT_POST,"telefone",FILTER_DEFAULT);
$femail=filter_input(INPUT_POST,"email",FILTER_DEFAULT);
$fsenha=filter_input(INPUT_POST,"senha",FILTER_DEFAULT);
//-----------------------------





}


?>
<form method="POST" action="">
  <label>Nome</label>
  <input type="text" name="nome">
  <label>CPF</label>
<input type="text" name="CPF">
<label>Telefone</label>
<input type="text" name="telefone">
<label>Email</label>
<input type="text" name="email">
<label>Senha</label>
<input type="text" name="senha">
<input type="submit" name="botaoConfirmar">
</form>
