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
        $nomes = $_POST['nomealu']; 
        $seriealus = $_POST['seriealu'];
        $cursoalus = $_POST['cursoalu'];
        $livros = $_POST['livro'];
        $rtombos = $_POST['rtombo'];
        $datemprs = $_POST['dtempres'];
        $datdevos = $_POST['dtdevo'];
        
        
        
        $sqli = "INSERT INTO registro(nomealuno,seriealuno,cursoaluno,livro,Rtombo,datemprestimo,datdevolucao)
        VALUES('$nomes','$seriealus','$cursoalus','$livros','$rtombos','$datemprs','$datdevos')";
        if($sqli = mysqli_query($conexao,$sqli)){

            echo("$nomes cadastrado com sucesso!");
        }
        else{
            echo("erro ao cadastrar usuario");
        }
        
        ?>
        <hr>
         <a href="inicio.php" class="btn btn-primary">voltar</a>

      

 
</body>

</html>