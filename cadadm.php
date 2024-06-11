<!doctype html>
<html lang="en">

<head>
  <!-- Meta tag para definir a codificação de caracteres como UTF-8 -->
  <meta charset="utf-8">
  <!-- Meta tag para garantir a responsividade em dispositivos móveis -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Título da página -->
  <title>cadastrado</title>
  <!-- Link para o arquivo CSS do Bootstrap para estilização -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <!-- Início do bloco PHP -->
  <?php
  // Inclui o arquivo de conexão com o banco de dados
  include "conexao.php";

  // Recebe os dados do formulário e armazena em variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  // Hash da senha para armazená-la de forma segura
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

  // Consulta SQL para inserir os dados do usuário na tabela 'admusuario'
  $sql = "INSERT INTO admusuario(nome, email, senha) VALUES('$nome', '$email', '$senha')";

  // Executa a consulta SQL e verifica se foi bem-sucedida
  if ($sql = mysqli_query($conexao, $sql)) {
    // Se bem-sucedida, exibe mensagem de sucesso
    echo("$nome cadastrado com sucesso!");
  } else {
    // Se houver erro, exibe mensagem de erro
    echo("Erro ao cadastrar usuário");
  }
  ?>

  <hr>
  <!-- Link para voltar à página inicial, estilizado como um botão do Bootstrap -->
  <a href="inicio.php" class="btn btn-primary">Voltar</a>

</body>

</html>
