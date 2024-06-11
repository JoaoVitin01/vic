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
            background-color: #c8e6c9; /* Novo background-color */
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
            min-width: 100px;
            line-height: 25px;
            text-align: center;
        }

        .btn:hover {
            background-color: #a5d6a7; /* Novo background-color no hover */
        }

        .btn-info {
            background-color: #b2ebf2; /* Novo background-color para btn-info */
            color: #333; /* Novo color para btn-info */
        }

        .btn-info:hover {
            background-color: #80deea; /* Novo background-color no hover para btn-info */
        }

        .btn-success {
    background-color: #b8bab6;
    /* Novo background-color para btn-success */
    color: #333;
    /* Novo color para btn-success */
}

        .btn-success:hover {
            background-color:  #b8bab7; /* Novo background-color no hover para btn-success */
        }

        .btn-danger {
            background-color: #ffcdd2; /* Novo background-color para btn-danger */
            color: #333; /* Novo color para btn-danger */
        }

        .btn-danger:hover {
            background-color: #ef9a9a; /* Novo background-color no hover para btn-danger */
        }

        .btn-salvar-pdf {
            background-color: #b3e5fc; /* Novo background-color para btn-salvar-pdf */
            color: #333; /* Novo color para btn-salvar-pdf */
            min-width: 100px;
            padding: 8px 16px;
            line-height: 25px;
            margin-right: 5px;
        }

        .btn-salvar-pdf:hover {
            background-color: #81d4fa; /* Novo background-color no hover para btn-salvar-pdf */
        }

        .modal-close.btn {
            background-color: #b8bab6; /* Novo background-color para btn dentro do modal */
            border-color: #c5e1a5; /* Novo border-color para btn dentro do modal */
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
            background-color: #c5e1a5; /* Novo background-color no hover para btn dentro do modal */
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
            background-color: #b8bab6; /* Novo background-color para search-button */
            color: #fff; /* Novo color para search-button */
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #b8bab7; /* Novo background-color no hover para search-button */
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
    </style>
</head>

<body>

    <div class="container">
        <a href="menu.php"><img src="img/return.png" alt="Voltar"></a>
        <div class="row">
            <div class="col">

                <h1>Pesquisa</h1>

                <form class="search-form" action="pesquisa.php" method="post">
                    <input class="search-input" type="search" name="buscas" placeholder="Digite o nome do aluno">
                    <?php
                    include "conexao.php";

                    $sqlTurmas = "SELECT DISTINCT seriealuno FROM registro";
                    $resultTurmas = mysqli_query($conexao, $sqlTurmas);

                    $turmas = array();
                    while ($row = mysqli_fetch_assoc($resultTurmas)) {
                        $turmas[] = $row['seriealuno'];
                    }
                    ?>
                    <select name="turma">
                        <option value="">Selecione a turma</option>
                        <?php foreach ($turmas as $turma) : ?>
                            <option value="<?php echo $turma; ?>"><?php echo $turma; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button class="search-button" type="submit">Pesquisar</button>
                </form>

                <?php
                $pesquisas = $_POST['buscas'] ?? '';
                $turmaSelecionada = $_POST['turma'] ?? '';
                include "conexao.php";

                $sql = "SELECT * FROM registro WHERE nomealuno LIKE '%$pesquisas%'";

                if (!empty($turmaSelecionada)) {
                    $sql .= " AND seriealuno = '$turmaSelecionada'";
                }

                $dados = mysqli_query($conexao, $sql);

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
                                    <td><?php echo htmlspecialchars($linha['nomealuno']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['seriealuno']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['cursoaluno']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['livro']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['Rtombo']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['datemprestimo']); ?></td>
                                    <td><?php echo htmlspecialchars($linha['datdevolucao']); ?></td>
                                    <td>
                                        <a href="editar.php?id_registro=<?php echo $linha['cod_rigistro']; ?>" class="btn btn-success"><i class="material-icons">edit</i></a>
                                        <a href="#" onclick="confirmarExclusao(<?php echo $linha['cod_rigistro']; ?>)" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        <button class="btn btn-salvar-pdf modal-trigger" data-target="modal-pdf"><i class="material-icons">save_alt</i></button>
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
                    <a href="#" class="modal-close btn btn-info">Cancelar</a>
                    <a id="excluir-btn" href="#" class="btn btn-danger">Excluir</a>
                </div>
            </div>

            <!-- Modal de confirmação para salvar em PDF -->
            <div id="modal-pdf" class="modal">
                <div class="modal-content">
                    <h4>Salvar em PDF</h4>
                    <p>Tem certeza de que deseja salvar a lista em PDF?</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-close waves-effect waves-green btn-flat btn-info">Cancelar</a>
                    <a href="salvar_pdf.php" class="modal-close waves-effect waves-green btn-flat btn-success">Salvar</a>
                </div>
            </div>

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
</body>

</html>
