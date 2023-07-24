<?php

session_start();
include_once("utilitarios.php");

// Remove a mensagem de sucesso da sessão
unset($_SESSION["sucesso_login"]);

// Redireciona o usuário para a página de login ou outra página desejada
header("Location: index.php"); // Substitua "index.php" pelo caminho da página desejada
exit();

?>