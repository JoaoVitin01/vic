<?php
// Verifique se o ID do registro foi fornecido na URL
if (isset($_GET['id_registro'])) {
    // Obtenha o ID do registro da URL e escape para prevenir SQL Injection
    $id_registro = intval($_GET['id_registro']);

    // Inclua o arquivo de conexão com o banco de dados
    include "conexao.php";

    // Verifique se a conexão foi estabelecida
    if ($conexao) {
        // Consulta SQL para excluir o registro com o ID fornecido
        $sql = "DELETE FROM registro WHERE cod_registro = $id_registro";

        // Execute a consulta SQL
        if (mysqli_query($conexao, $sql)) {
            echo "Registro excluído com sucesso.";
        } else {
            echo "Erro ao excluir o registro: " . mysqli_error($conexao);
        }

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
    } else {
        echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    }
} else {
    echo "ID de registro não fornecido na URL.";
}
?>
