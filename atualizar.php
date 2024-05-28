<?php
// Verifique se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Supondo que você tenha uma conexão com o banco de dados estabelecida em "conexao.php"
    include "conexao.php";

    // Verifique se todos os campos do formulário estão presentes e não estão vazios
    if (isset($_POST['id_registro']) && isset($_POST['nomealuno']) && isset($_POST['seriealuno']) && isset($_POST['cursoaluno']) && isset($_POST['livro']) && isset($_POST['Rtombo']) && isset($_POST['datemprestimo']) && isset($_POST['datdevolucao'])) {
        // Obtenha os dados do formulário e sanitize, você deve validar e sanitizar adequadamente os dados para evitar injeções de SQL
        $id_registro = $_POST['id_registro'];
        $nomealuno = mysqli_real_escape_string($conexao, $_POST['nomealuno']);
        $seriealuno = mysqli_real_escape_string($conexao, $_POST['seriealuno']);
        $cursoaluno = mysqli_real_escape_string($conexao, $_POST['cursoaluno']);
        $livro = mysqli_real_escape_string($conexao, $_POST['livro']);
        $Rtombo = mysqli_real_escape_string($conexao, $_POST['Rtombo']);
        $datemprestimo = mysqli_real_escape_string($conexao, $_POST['datemprestimo']);
        $datdevolucao = mysqli_real_escape_string($conexao, $_POST['datdevolucao']);

        // Query SQL para atualizar o registro no banco de dados
        $sql = "UPDATE registro SET 
                nomealuno = '$nomealuno',
                seriealuno = '$seriealuno',
                cursoaluno = '$cursoaluno',
                livro = '$livro',
                Rtombo = '$Rtombo',
                datemprestimo = '$datemprestimo',
                datdevolucao = '$datdevolucao'
                WHERE cod_rigistro = $id_registro";

        // Executa a query
        if (mysqli_query($conexao, $sql)) {
            // Redireciona de volta para a página de pesquisa ou exibe uma mensagem de sucesso
            header("Location: pesquisa.php");
            exit();
        } else {
            echo "Erro ao atualizar registro: " . mysqli_error($conexao);
        }

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
} else {
    // Se o formulário não foi enviado via método POST, redirecione de volta para a página de pesquisa
    header("Location: pesquisa.php");
    exit();
}
?>
