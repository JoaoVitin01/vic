
<!DOCTYPE html>
<html>

<head>
 <!-- cad e registro integrado para poder aparer a mensaguem de alerta na mesma tela -->

  <link rel="stylesheet" type="text/css" href="registro.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>

  <div class="container">
  <!-- botão de retorno img -->
   <a href="menu.php"><img src="img/return.png"></a>


    <h1>Fazer Registro</h1>

    <?php
    include "conexao.php";

    // Inicializa a mensagem e a classe de alerta
    $mensagem = '';
    $classe_alerta = '';

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
        // mensaguens de sucesso ou erro
        if (mysqli_query($conexao, $sqli)) {
          $mensagem = "$nomes cadastrado com sucesso!";
          $classe_alerta = 'alert-success';
        } else {
          $mensagem = "Erro ao cadastrar usuário: " . mysqli_error($conexao);
          $classe_alerta = 'alert-error';
        }
      } else {
        $mensagem = "Todos os campos são obrigatórios.";
        $classe_alerta = 'alert-error';
      }
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conexao);
    ?>

    <?php if (!empty($mensagem)) : ?>
      <div class="alert <?php echo $classe_alerta; ?>">
        <?php echo $mensagem; ?>
      </div>
      <?php if ($classe_alerta == 'alert-success') : ?>
        <a href="pesquisa.php" class="btn btn-pesquisa">Ver Registro</a>
      <?php endif; ?>
    <?php endif; ?>
      <!-- formulario integrado -->
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


        <!--JavaScript-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

      </div>

    </form