<!doctype html>
<html lang="en">
<head>
  <!-- Meta tags essenciais para definir a codificação de caracteres e garantir a responsividade -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Título da página -->
  <title>01</title>
  <!-- Link para o arquivo CSS do Bootstrap para estilização -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <!-- Cabeçalho principal da página -->
  <h1>Cadastre-se</h1>

  <!-- Formulário que envia dados para o script 'cadadm.php' utilizando o método POST -->
  <form action="cadadm.php" method="post">
    <!-- Div para agrupar os campos do formulário -->
    <div>
      <!-- Rótulo para o campo "Nome" -->
      <label for="nome" class="form-label">Nome</label>
      <!-- Campo de entrada de texto para o nome do usuário -->
      <input type="text" class="form-control" name="nome"><br>

      <!-- Rótulo para o campo "E-mail" -->
      <label for="email" class="form-label">E-mail</label>
      <!-- Campo de entrada de e-mail para o e-mail do usuário -->
      <input type="email" class="form-control" name="email"><br>

      <!-- Rótulo para o campo "Senha" -->
      <label for="senha" class="form-label">Senha</label>
      <!-- Campo de entrada de senha para a senha do usuário -->
      <input type="password" class="form-control" name="senha"><br>

      <!-- Botão de envio do formulário com a classe do Bootstrap para estilização -->
      <input type="submit" class="btn btn-success">
    </div>
  </form>

  <!-- Link para retornar à página inicial, estilizado como um botão do Bootstrap -->
  <a href="inicio.php" class="btn btn-info">Voltar ao Inicio</a>
</body>

</html>
