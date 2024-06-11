<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <p>versão beta 1.0</p>
  <p>Sujeito a erros</p>
  <title>Devoluções Atrasasdas</title>
  <link rel="stylesheet" type="text/css" href="registro.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Atrasos</h1>

    <?php
    include "conexao.php";

    // Consulta para obter os livros em atraso
    $consulta_atraso = "SELECT * FROM registro WHERE datdevolucao < CURDATE()";
    $resultado_atraso = mysqli_query($conexao, $consulta_atraso);

    if (mysqli_num_rows($resultado_atraso) > 0) : ?>
      <table>
        <tr>
          <th>Nome do Aluno</th>
          <th>Livro</th>
          <th>Data de Devolução</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($resultado_atraso)) : ?>
          <tr>
            <td><?php echo $row['nomealuno']; ?></td>
            <td><?php echo $row['livro']; ?></td>
            <td><?php echo $row['datdevolucao']; ?></td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else : ?>
      <p>Não há livros em atraso.</p>
    <?php endif; ?>

  </div>

</body>

</html>
