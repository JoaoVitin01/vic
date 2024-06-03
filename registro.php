    <!DOCTYPE html>
    <html>

    <head>
      <!--Import Google Icon Font-->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <!--Import materialize.css-->
     <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->


      <link rel="stylesheet" type="text/css" href="registro.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>



      <div class="container">
      <a href="menu.php"><img src="img/return.png"></a>
      


      <h1>Fazer Registro</h1>
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


          <!--JavaScript at end of body for optimized loading-->
          <script type="text/javascript" src="js/materialize.min.js"></script>
          
        </div>
        
    </body>

    </html>