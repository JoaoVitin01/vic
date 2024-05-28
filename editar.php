<?php
// Verifique se o ID do registro foi fornecido na URL
if (isset($_GET['id_registro'])) {
    // Obtenha o ID do registro da URL
    $id_registro = $_GET['id_registro'];

    // Supondo que você tenha uma conexão com o banco de dados estabelecida em "conexao.php"
    include "conexao.php";

    // Consulta SQL para recuperar os dados do registro com o ID fornecido
    $sql = "SELECT * FROM registro WHERE cod_rigistro = $id_registro";
    $resultado = mysqli_query($conexao, $sql);

    // Verifica se a consulta foi bem-sucedida
    if ($resultado) {
        // Verifica se o registro foi encontrado
        if (mysqli_num_rows($resultado) > 0) {
            // Recupera os dados do registro e atribui à variável $registro
            $registro = mysqli_fetch_assoc($resultado);
        } else {
            echo "Registro não encontrado.";
        }
    } else {
        echo "Erro ao consultar o banco de dados: " . mysqli_error($conexao);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
} else {
    echo "ID de registro não fornecido na URL.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <h2>Editar Registro</h2>
    <form action="atualizar.php" method="post">
        <!-- Campos do formulário preenchidos com os dados do registro -->
        <input type="hidden" name="id_registro" value="<?php echo $id_registro; ?>">
        <label for="nomealuno">Nome do Aluno:</label><br>
        <input type="text" id="nomealuno" name="nomealuno" value="<?php echo isset($registro['nomealuno']) ? $registro['nomealuno'] : ''; ?>"><br>
        <label for="seriealuno">Série do Aluno:</label><br>
        <input type="text" id="seriealuno" name="seriealuno" value="<?php echo isset($registro['seriealuno']) ? $registro['seriealuno'] : ''; ?>"><br>
        <label for="cursoaluno">Curso do Aluno:</label><br>
        <input type="text" id="cursoaluno" name="cursoaluno" value="<?php echo isset($registro['cursoaluno']) ? $registro['cursoaluno'] : ''; ?>"><br>
        <label for="livro">Livro:</label><br>
        <input type="text" id="livro" name="livro" value="<?php echo isset($registro['livro']) ? $registro['livro'] : ''; ?>"><br>
        <label for="Rtombo">R Tombo:</label><br>
        <input type="text" id="Rtombo" name="Rtombo" value="<?php echo isset($registro['Rtombo']) ? $registro['Rtombo'] : ''; ?>"><br>
        <label for="datemprestimo">Data de Empréstimo:</label><br>
        <input type="text" id="datemprestimo" name="datemprestimo" value="<?php echo isset($registro['datemprestimo']) ? $registro['datemprestimo'] : ''; ?>"><br>
        <label for="datdevolucao">Data de Devolução:</label><br>
        <input type="text" id="datdevolucao" name="datdevolucao" value="<?php echo isset($registro['datdevolucao']) ? $registro['datdevolucao'] : ''; ?>"><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>
