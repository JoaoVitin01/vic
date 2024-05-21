<?php

// Dados de login (geralmente armazenados em um banco de dados)
$usuario_valido = "teste";
$senha_valida = "teste";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verifica se o usuário e a senha estão corretos
    if ($nome === $usuario_valido && $senha === $senha_valida) {
        // Login válido, redireciona para a página de sucesso
        header("Location: pesquisa.php");
        exit;
    } else {
        // Login inválido, exibe uma mensagem de erro
        $erro = "Usuário ou senha inválidos.";
    }
}

?>