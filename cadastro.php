<?php
include_once("utilitario.php"); // Inclui o arquivo com a configuração da conexão

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $CPF = $_POST["CPF"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Verificar a conexão (remova essa parte, pois a conexão já foi estabelecida em "utilitario.php")

    // Inserir os dados na tabela de usuários (substitua "tabela_usuarios" pelo nome da tabela que você está usando)
    $sql1 = "INSERT INTO Cliente (nome, CPF, senha) VALUES ('$nome', '$CPF', '$senha')";
    $sql2 = "INSERT INTO Telefone_Cliente (n_Tel) VALUES ('$telefone')";
    $sql3 = "INSERT INTO Email_Cliente (email) VALUES ('$email')";

    if ($mysql->query($sql1) === true && $mysql->query($sql2) === true && $mysql->query($sql3) === true) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $mysql->error;
    }

    // Fechar a conexão (remova essa parte, pois a conexão já foi fechada em "utilitario.php")
}
?>