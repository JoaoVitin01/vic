<?php
// Incluir arquivo de configuração do banco de dados
include_once 'conexao.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos foram preenchidos
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        // Extrair os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consultar o banco de dados para encontrar o usuário com o email fornecido
        $sql = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
        $result = mysqli_query($conexao, $sql);

        if ($result) {
            // Verificar se o usuário foi encontrado
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                // Verificar se a senha está correta
                if (password_verify($senha, $row['senha'])) {
                    // Senha correta, redirecionar para página de sucesso
                    header("Location: menu.php");
                    exit();
                } else {
                    // Senha incorreta, redirecionar de volta para o formulário de login com uma mensagem de erro
                    header("Location: login.php?erro=senha_incorreta");
                    exit();
                }
            } else {
                // Usuário não encontrado, redirecionar de volta para o formulário de login com uma mensagem de erro
                header("Location: login.php?erro=usuario_nao_encontrado");
                exit();
            }
        } else {
            // Erro na consulta ao banco de dados, redirecionar de volta para o formulário de login com uma mensagem de erro
            header("Location: login.php?erro=erro_bd");
            exit();
        }
    } else {
        // Campos do formulário não foram preenchidos, redirecionar de volta para o formulário de login com uma mensagem de erro
        header("Location: login.php?erro=campos_vazios");
        exit();
    }
} else {
    // Redirecionar de volta para o formulário de login se o acesso não for via POST
    header("Location: login.php");
    exit();
}
?>
