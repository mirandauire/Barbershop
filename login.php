<?php
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

  // Consulta para verificar as credenciais (substitua "tabela_usuarios" pelo nome da tabela que você está usando)
  $sql = "SELECT * FROM Cliente WHERE nome='$usuario' AND senha='$senha'";
  $result = $mysql->query($sql);

  if ($result->num_rows == 1) {
      // Credenciais corretas, o usuário tem acesso
      header("Location: user.php");
      echo "Login bem-sucedido!";
  } else {
      // Credenciais incorretas, o usuário não tem acesso
      echo "Email ou senha incorretos.";
  }

  // Fechar a conexão
  $mysql->close();
}
?>