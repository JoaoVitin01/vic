<!DOCTYPE html>
<html>

<head>
 

  <link rel="stylesheet" type="text/css" href="registro.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <div class="container">
    <a href="menu.php"><img src="img/return.png"></a>


    <h1>Fazer Registro</h1>

    <?php
    include "conexao.php";

    // Inicializa a mensagem
    $mensagem = '';

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
          $mensagem = "$nomes cadastrado com sucesso!";
        } else {
          $mensagem = "Erro ao cadastrar usuário: " . mysqli_error($conexao);
        }
      } else {
        $mensagem = "Todos os campos são obrigatórios.";
      }
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
    ?>

    <?php if (!empty($mensagem)) : ?>
      <div class="alert">
        <?php echo $mensagem; ?>
      </div>
    <?php endif; ?>

    <form action="" method="post">
      <div class=>
        <label for="nomealuno" class="form-label">Nome do Aluno</label>
        <input type="text" class="form-control" name="nomealu"><br>


        <label for="seriealuno" class="form-label">Serie do aluno</label>
        <input type="text" class="form-control" name="seriealu"><br>


        <label for="cursoaluno" class="form-label">Curso do Aluno</label>
        <input type="text" class="form-control" name="cursoalu"><br>


        <label for="livro" class="form-label">Livro</label>
        <input type="text" class="form-control" name="livro"><br>

        <label for="Rtombo" class="form-label">R tombo</label>
        <input type="number" class="form-control" name="rtombo"><br>

        <label for="datemprestimo" class="form-label">Data de Emprestimo</label>
        <input type="date" class="form-control" name="dtempres"> <br>

        <label for="datdevolucao" class="form-label">Data de Devolução</label>
        <input type="date" class="form-control" name="dtdevo"> <br>

        <input type="submit" class="btn btn-success">


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

      </div>

    </form>
  </div>

</body>

</html>
