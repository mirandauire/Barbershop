<?php

session_start();
include_once("utilitarios.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $CPF = $_POST["CPF"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Inserir os dados na tabela de usuários (substitua "tabela_usuarios" pelo nome da tabela que você está usando)
    $sql = "INSERT INTO Cliente (nome, CPF, senha, telefone, email) VALUES ('$nome', '$CPF', '$senha', '$telefone', '$email')";

    if ($mysql->query($sql) === true) {
        $_SESSION["sucesso_registro"] = "Cadastro realizado com sucesso!";
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar: " . $mysql->error;
    }
}

  // Fechar a conexão
  $mysql->close();

?>