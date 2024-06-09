<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastrado</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

  <?php
  include "conexao.php";

  // Verifique se todos os campos obrigatórios estão preenchidos
  if (
    !empty($_POST['nomealu']) && !empty($_POST['seriealu']) &&
    !empty($_POST['cursoalu']) && !empty($_POST['livro']) &&
    !empty($_POST['rtombo']) && !empty($_POST['dtempres']) &&
    !empty($_POST['dtdevo'])
  ) {
    $nomes = $_POST['nomealu'];
    $seriealus = $_POST['seriealu'];
    $cursoalus = $_POST['cursoalu'];
    $livros = $_POST['livro'];
    $rtombos = $_POST['rtombo'];
    $datemprs = $_POST['dtempres'];
    $datdevos = $_POST['dtdevo'];

    // Consulta SQL para inserir os dados
    $sqli = "INSERT INTO registro (nomealuno, seriealuno, cursoaluno, livro, Rtombo, datemprestimo, datdevolucao)
             VALUES ('$nomes', '$seriealus', '$cursoalus', '$livros', '$rtombos', '$datemprs', '$datdevos')";

    if (mysqli_query($conexao, $sqli)) {
      echo "$nomes cadastrado com sucesso!";
    } else {
      echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
    }
  } else {
    echo "Todos os campos são obrigatórios.";
  }

  // Feche a conexão com o banco de dados
  mysqli_close($conexao);
  ?>

  <hr>
  <a href="menu.php" class="btn btn-primary">Voltar</a>

</body>

</html>
