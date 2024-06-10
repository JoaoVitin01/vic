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
        $nome = $_POST['nome']; 
        $email = $_POST['email']; 
        $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT); 
       
        
        
        
        $sql = "INSERT INTO usuarios(nome,email,senha)
        VALUES('$nome','$email','$senha')";
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