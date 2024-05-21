<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="page">
        <form action="vallogin.php" method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="nome">nome</label>
            <input type="nome" placeholder="Digite seu nome" autofocus="true" />
           <label for="email">email</label>
          <input type="email" placeholder="Digite seu email" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" />
            <a href="">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />

        </form>
        </div>

    
</body>
</html>