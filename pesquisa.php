<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
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
</head>

<body>

    <div class="container">
        <a href="menu.php"><img src="img/return.png"></a>
        <div class="row">
            <div class="col">

                <h1>Pesquisa</h1>

                <form class="search-form" action="pesquisa.php" method="post">
                    <input class="search-input" type="search" name="buscas" placeholder="Digite o nome do aluno">
                    <button class="search-button" type="submit">Pesquisar</button>
                </form>

                <?php
                $pesquisas = $_POST['buscas'] ?? '';
                include "conexao.php";

                $sqli = "SELECT * FROM registro WHERE nomealuno LIKE '%$pesquisas%'";
                $dados = mysqli_query($conexao, $sqli);

                if (!$dados) {
                    echo "Erro na consulta SQL: " . mysqli_error($conexao);
                    exit;
                }
                ?>

                <?php if (mysqli_num_rows($dados) > 0) : ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome do Aluno</th>
                                <th>Série do Aluno</th>
                                <th>Curso do Aluno</th>
                                <th>Livro</th>
                                <th>R Tombo</th>
                                <th>Data de Empréstimo</th>
                                <th>Data de Devolução</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($linha = mysqli_fetch_assoc($dados)) : ?>
                                <tr>
                                    <td><?php echo $linha['nomealuno']; ?></td>
                                    <td><?php echo $linha['seriealuno']; ?></td>
                                    <td><?php echo $linha['cursoaluno']; ?></td>
                                    <td><?php echo $linha['livro']; ?></td>
                                    <td><?php echo $linha['Rtombo']; ?></td>
                                    <td><?php echo $linha['datemprestimo']; ?></td>
                                    <td><?php echo $linha['datdevolucao']; ?></td>
                                    <td>
                                        <a href="editar.php?id_registro=<?php echo $linha['cod_registro']; ?>" class="btn btn-success">Editar</a>
                                        <a href="#" onclick="confirmarExclusao(<?php echo $linha['cod_registro']; ?>)" class="btn btn-danger">Excluir</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>Nenhum resultado encontrado.</p>
                <?php endif; ?>

            </div>

            <?php mysqli_free_result($dados); ?>

            <!-- Modal de confirmação de exclusão -->
            <div id="modal-confirmacao" class="modal">
                <div class="modal-content">
                    <h4>Confirmar Exclusão</h4>
                    <p>Você tem certeza que deseja excluir este registro?</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-close btn">Cancelar</a>
                    <a id="excluir-btn" href="#" class="btn btn-danger">Excluir</a>
                </div>
            </div>

            <!-- Scripts JavaScript -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="js/materialize.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('.modal').modal();
                });

                function confirmarExclusao(id_registro) {
                    $('#excluir-btn').attr('href', 'excluir_registro.php?id_registro=' + id_registro);
                    $('#modal-confirmacao').modal('open');
                }
            </script>
        </div>
    </div>
</body>

</html>
