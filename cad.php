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

        include "conexao.php";
        $nome = $_POST['nomealu']; 
        $seriealu = $_POST['seriealu'];
        $cursoalu = $_POST['cursoalu'];
        $livro = $_POST['livro'];
        $rtombo = $_POST['rtombo'];
        $datempr = $_POST['dtempres'];
        $datdevo = $_POST['dtdevo'];
        
        
        $sql = "INSERT INTO registro(nomealuno,seriealuno,cursoaluno,livro,Rtombo,datemprestimo,datdevolucao)
        VALUES('$nome','$seriealu','$cursoalu','$livro','$rtombo','$datempr','$datdevo')";
        if($sql = mysqli_query($conexao,$sql)){

            echo("$nome cadastrado com sucesso!");
        }
        else{
            echo("erro ao cadastrar usuario");
        }
        
        ?>
        <hr>
         <a href="inicio.php" class="btn btn-primary">voltar</a>

      

 
</body>

</html>