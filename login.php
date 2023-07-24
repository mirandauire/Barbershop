<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do usuário (substitua essas informações com os dados reais do usuário)
    $usuarioCadastrado = "u123";
    $senhaCadastrada = "s123";

    // Obter os dados enviados pelo formulário
    $usuarioDigitado = $_POST["usuario"];
    $senhaDigitada = $_POST["senha"];

    // Verificar as credenciais do usuário
    if ($usuarioDigitado === $usuarioCadastrado && $senhaDigitada === $senhaCadastrada) {
        // Credenciais corretas, redirecionar para a página de sucesso
        header("Location: user.php");
        exit();
    } else {
        // Credenciais incorretas, exibir mensagem de erro
        header("Location: index.php#section0");
        $erroLogin = "Usuário ou senha inválidos!";
    }
}
?>