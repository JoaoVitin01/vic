<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Biblioteca</title>
    <link rel="stylesheet" href="main.css"> <!-- Inclui o arquivo de estilos externo -->
</head>
<body>
    <div class="page"> <!-- Div para envolver o conteúdo do formulário -->
        <form action="vallogin.php" method="POST" class="formLogin"> <!-- Formulário de login -->
            <h1>Login</h1> <!-- Título do formulário -->
            <p>Digite os seus dados de acesso no campo abaixo.</p> <!-- Descrição do formulário -->
            <label for="nome">Nome</label> <!-- Rótulo para o campo Nome -->
            <input type="text" name="nome" placeholder="Digite seu nome" autofocus="true" /> <!-- Campo de texto para o nome -->
            <label for="email">Email</label> <!-- Rótulo para o campo Email -->
            <input type="email" name="email" placeholder="Digite seu email" /> <!-- Campo de email -->
            <label for="password">Senha</label> <!-- Rótulo para o campo Senha -->
            <input type="password" name="senha" placeholder="Digite sua senha" /> <!-- Campo de senha -->
            
            <input type="submit" value="Acessar" class="btn" /> <!-- Botão de envio do formulário -->
        </form>
    </div>
</body>
</html>
