<?php
ob_start();
session_start();

include_once("utilitarios.php");
popup($_SESSION['id']);
if(isset($_POST['botaoSair'])){
  unset($_SESSION['id']);
  header("Location:login.php");
}
if(isset($_SESSION['id'])){
  echo "bem-vindo ".$_SESSION['nome']; ?>
  <form>
<input formmethod="POST" formaction="" type="submit" name="botaoSair" value="sair">
<form>
<?php
}else{
  echo "você não está logado";
}
ob_flush();
?>
