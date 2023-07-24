<?php

session_start();
include_once("utilitarios.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obter as credenciais do formulário
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];

  // Verificar a conexão
  if ($mysql->connect_error) {
      die("Erro de conexão: " . $mysql->connect_error);
  }

  // Consulta na tabela Cliente para verificar as credenciais
  $sql = "SELECT * FROM Cliente WHERE (nome='$usuario' OR email='$usuario' OR cpf='$usuario') AND senha='$senha'";
  $result = $mysql->query($sql);

  if ($result->num_rows == 1) {
      // Credenciais corretas, o usuário tem acesso
      $_SESSION["sucesso_login"] = "Oi, " . $usuario . ". Você já está logado.";
      header("Location: index.php");
      exit();
  } else {
      // Credenciais incorretas, o usuário não tem acesso 
      $_SESSION["erro_login"] = "Usuário ou senha incorreto(s).";
      header("Location: index.php");
      exit();
  }

  // Fechar a conexão
  $mysql->close();
}

?>