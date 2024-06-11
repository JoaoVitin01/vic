<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="registro.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    .alert {
      padding: 10px;
      margin-bottom: 15px;
    }

    .alert-error {
      background-color: #f2dede;
      border-color: #ebccd1;
      color: #a94442;
    }

    .alert-success {
      background-color: #dff0d8;
      border-color: #d6e9c6;
      color: #3c763d;
    }

    .btn {
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      background-color: #b8bab6; /* Novo background-color para botões */
      color: #333; /* Novo color para botões */
      cursor: pointer;
      margin-top: 10px; /* Espaçamento superior */
    }

    .btn:hover {
      background-color: #979797; /* Novo background-color no hover para botões */
    }
  </style>
</head>

<body>

  <div class="container">
    <a href="menu.php"><img src="img/return.png"></a>

    <h1>Fazer Registro</h1>

    <?php
    include "conexao.php";

    $mensagem = '';
    $classe_alerta = '';

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

        if ($datdevos < $datemprs) {
          $mensagem = "A data de devolução não pode ser anterior à data de empréstimo.";
          $classe_alerta = 'alert-error';
        } else {
          if ($datdevos < date('Y-m-d')) {
            $mensagem = "A data de devolução não pode ser no passado.";
            $classe_alerta = 'alert-error';
          } else {
            $sqli = "INSERT INTO registro (nomealuno, seriealuno, cursoaluno, livro, Rtombo, datemprestimo, datdevolucao)
                     VALUES ('$nomes', '$seriealus', '$cursoalus', '$livros', '$rtombos', '$datemprs', '$datdevos')";
            if (mysqli_query($conexao, $sqli)) {
              $mensagem = "registo feito com sucesso!";
              $classe_alerta = 'alert-success';
            } else {
              $mensagem = "Erro ao cadastrar usuário: " . mysqli_error($conexao);
              $classe_alerta = 'alert-error';
            }
          }
        }
      } else {
        $mensagem = "Todos os campos são obrigatórios.";
        $classe_alerta = 'alert-error';
      }
    }

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

    <form action="" method="post">
      <div class=>
        <label for="nomealuno" class="form-label">Nome do Aluno</label>
        <input type="text" class="form-control" name="nomealu"><br>

        <label for="seriealuno" class="form-label">Serie do aluno</label>
        <select name="seriealu" class="form-control">
          <option value="selecione">selecione..</option>
          <option value="1a">1A</option>
          <option value="1b">1B</option>
          <option value="1c">1C</option>
          <option value="1d">1D</option>
          <option value="2a">2A</option>
          <option value="2b">2B</option>
          <option value="2c">2C</option>
          <option value="2d">2D</option>
          <option value="3a">3A</option>
          <option value="3b">3B</option>
          <option value="3c">3C</option>
          <option value="3d">3D</option>
          <!-- Repita o mesmo padrão para as outras séries -->
        </select><br>


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
      </div>
    </form>
  </div>

  <script>
    // Validação da data de devolução
    document.addEventListener('DOMContentLoaded', function() {
      const inputDtDevolucao = document.querySelector('input[name="dtdevo"]');
      inputDtDevolucao.addEventListener('change', function() {
        const dataDevolucao = new Date(inputDtDevolucao.value);
        const hoje = new Date();
        if (dataDevolucao < hoje) {
          alert('A data de devolução não pode ser no passado.');
          inputDtDevolucao.value = ''; // Limpa o campo
        }
      });
    });
  </script>

</body>

</html>
