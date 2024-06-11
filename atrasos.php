<!DOCTYPE html>
<html>
<head>
  <!-- Definição do charset para UTF-8 -->
  <meta charset="UTF-8">
  <!-- Informações sobre a versão beta e possíveis erros -->
  <p>versão beta 1.0</p>
  <p>Sujeito a erros</p>
  <!-- Título da página -->
  <title>Devoluções Atrasasdas</title>
  <!-- Link para o arquivo CSS externo -->
  <link rel="stylesheet" type="text/css" href="registro.css">
  <!-- Meta tag para garantir a responsividade em dispositivos móveis -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Estilo interno para a tabela -->
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

    th, td {
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
  <!-- Div container para centralizar o conteúdo da página -->
  <div class="container">
    <!-- Título principal da página -->
    <h1>Atrasos</h1>

    <!-- Início do bloco PHP -->
    <?php
    // Inclui o arquivo de conexão com o banco de dados
    include "conexao.php";

    // Consulta SQL para obter registros de livros com data de devolução atrasada
    $consulta_atraso = "SELECT * FROM registro WHERE datdevolucao < CURDATE()";
    // Executa a consulta e armazena o resultado
    $resultado_atraso = mysqli_query($conexao, $consulta_atraso);

    // Verifica se há registros retornados pela consulta
    if (mysqli_num_rows($resultado_atraso) > 0) : ?>
      <!-- Criação da tabela para exibir os registros -->
      <table>
        <tr>
          <th>Nome do Aluno</th>
          <th>Livro</th>
          <th>Data de Devolução</th>
        </tr>
        <!-- Loop através dos resultados da consulta -->
        <?php while ($row = mysqli_fetch_assoc($resultado_atraso)) : ?>
          <tr>
            <!-- Exibe o nome do aluno -->
            <td><?php echo $row['nomealuno']; ?></td>
            <!-- Exibe o nome do livro -->
            <td><?php echo $row['livro']; ?></td>
            <!-- Exibe a data de devolução -->
            <td><?php echo $row['datdevolucao']; ?></td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else : ?>
      <!-- Mensagem exibida se não houver registros em atraso -->
      <p>Não há livros em atraso.</p>
    <?php endif; ?>
  </div>
</body>
</html>
