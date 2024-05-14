<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>01</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
        <h1>Cadastre-se</h1>
        <form action="cad.php" method="post">
          <div class=>
            <label for="nomealuno" class="form-label">Nome do Aluno</label>
            <input type="text" class="form-control" name="nomealu"><br>


            <label for="seriealuno" class="form-label">Serie do aluno</label>
            <input type="text" class="form-control" name="seriealu"><br>


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
        <a href="inicio.php" class=" btn btn-info">Voltar ao Inicio</a>






 
</body>

</html>