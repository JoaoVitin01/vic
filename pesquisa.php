<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $pesquisas = $_POST['buscas'] ?? '';
    include "conexao.php";

    $sqli = "SELECT * FROM registro where nomealuno LIKE '%$pesquisas%'";
    $dados = mysqli_query($conexao,$sqli);
    ?>
    
                <h1>pesquisa</h1>

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="post">
                            <input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="Search" name="buscas">
                            <button class="btn btn-outline-success" type="submit">pesquisar</button>
                        </form>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th scope="col">Nome do Aluno</th>
                                <th scope="col">Serie do Aluno</th>
                                <th scope="col">Curso do Aluno</th>
                                <th scope="col">Livro</th>
                                <th scope="col">R tombo</th>
                                <th scope="col">Data de Emprestimo</th>
                                <th scope="col">Data de Devolução</th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            while ($linha = mysqli_fetch_assoc($dados)) {
                                $nomes = $linha['nomealu']; 
                                $seriealus = $linha['seriealu'];
                                $cursoalus = $linha['cursoalu'];
                                $livros = $linha['livro'];
                                $rtombos = $linha['rtombo'];
                                $datemprs = $linha['dtempres'];
                                $datdevos = $linha['dtdevo'];


                                echo "<tr>

        <td>$nomes</td>
        <td>$seriealus</td>
        <td>$cursoalus</td>
        <td>$livros</td>
        <td>$rtombos</td>
        <td>$datemprs</td>
        <td>$datdevos</td>
        <td width=150px>

        <a href='#' class='btn btn-success btn-sm'>Editar</a>
        <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
        
        </td>

        </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                    <a href="inicio.php" class="btn btn-info">Voltar ao Inicio</a>
                </nav>




    
</body>

</html>