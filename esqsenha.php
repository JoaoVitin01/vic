<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
</head>
<body>

<div class="container">
    <div class="row">
      <div class="col">

<!--<img src="img/bibli.jpg">-->
<ul class="menu">

      <li title="home"><a href="#" class="menu-button home">menu</a></li>
      
      <li title="search"><a href="#" class="search">search</a></li>
      <li title="pencil"><a href="#" class="pencil">pencil</a></li>
      <li title="about"><a href="#" class="active about">about</a></li>
      <li title="archive"><a href="#" class="archive">archive</a></li>
      <li title="contact"><a href="#" class="contact">contact</a></li>
    </ul>
    
    <ul class="menu-bar">
        <li><a href="#" class="menu-button">Menu</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Editorial</a></li>
        <li><a href="#">About</a></li>
    </ul>
       
    </div>
    </div>
  </div>
  

    <script src="navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</div>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }

        p {
            margin-top: 0;
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-input {
            padding: 8px;
            width: 60%;
            max-width: 400px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
    </style>




 <!-- <li class="navbar-item flexbox-left"> 
      <a class="navbar-item-inner flexbox-left" href="#">
        <i class="material-icons">dashboard</i>
        <span class="link-text">Dashboard</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href="perfil.php">
        <i class="material-icons">person</i>
        <span class="link-text">Perfil</span>
      </a>
    </li>
     -->

     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            text-decoration: none;
            color: #333;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
            min-width: 100px;
            line-height: 25px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-success {
            background-color: bisque;
        }

        .btn-success:hover {
            background-color: blanchedalmond;
        }

        .btn-danger {
            background-color: rgb(238, 44, 44);
        }

        .btn-danger:hover {
            background-color: rgb(219, 64, 64);
        }

        .modal-close.btn {
            background-color: bisque;
            border-color: #ddd;
        }

        /* Estilo para o modal */
        .modal {
            max-width: 90%;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-footer {
            padding: 10px 20px;
            justify-content: flex-end;
        }

        .modal-close.btn:hover {
            background-color: antiquewhite;
        }

        p {
            margin-top: 0;
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-input {
            padding: 8px;
            width: 60%;
            max-width: 400px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: bisque;
            color: #333;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: antiquewhite;
        }

        @media only screen and (max-width: 600px) {
            .container {
                max-width: 95%;
            }

            .search-input {
                width: 100%;
                max-width: none;
            }

            .btn {
                padding: 6px 12px;
                font-size: 12px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
     width: calc(100% - 250px); /* Ajuste conforme necessário para sua barra lateral */








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
              $mensagem = "$nomes cadastrado com sucesso!";
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






body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 5px;
            text-decoration: none;
            color: #333;
            background-color: #007bff;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
            min-width: 100px;
            line-height: 25px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-success {
            background-color: bisque;
        }

        .btn-success:hover {
            background-color: blanchedalmond;
        }

        .btn-danger {
            background-color: rgb(238, 44, 44);
        }

        .btn-danger:hover {
            background-color: rgb(219, 64, 64);
        }

        .btn-salvar-pdf {
            background-color: gray;
            min-width: 100px;
            padding: 8px 16px;
            line-height: 25px;
            margin-right: 5px;
        }

        .btn-salvar-pdf:hover {
            background-color: dimgrey;
        }

        .modal-close.btn {
            background-color: bisque;
            border-color: #ddd;
        }

        /* Estilo para o modal */
        .modal {
            max-width: 90%;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-footer {
            padding: 10px 20px;
            justify-content: flex-end;
        }

        .modal-close.btn:hover {
            background-color: antiquewhite;
        }

        p {
            margin-top: 0;
            text-align: center;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-input {
            padding: 8px;
            width: 60%;
            max-width: 400px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .search-button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: bisque;
            color: #333;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: antiquewhite;
        }

        @media only screen and (max-width: 600px) {
            .container {
                max-width: 95%;
            }

            .search-input {
                width: 100%;
                max-width: none;
            }
            h1 {
                font-size: 20px;
            }
        }